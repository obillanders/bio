<?php

namespace AppBundle\Command;

use AppBundle\Import\ImportManager;
use AppBundle\Util\FileUtils;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

use Shapecode\Bundle\CronBundle\Annotation\CronJob;
use Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use \Psr\Log\LoggerInterface;

/**
 * Class ImportCommand
 * @package AppBundle\Command
 *
 * @CronJob("0 4 * * *")
 *
 * @TODO test execute
 * @TODO move file after success
 */
class ImportCommand extends ContainerAwareCommand
{
    /* @var ContainerInterface */
    protected $container;
    /* @var ImportManager */
    protected $importManager;
    /* @var FileUtils */
    public $fileUtils = FileUtils::class;
    /* @var LoggerInterface */
    private $logger;

    protected function configure()
    {
        $groups = 'officines-pharmaciens';
        $names = 'officines | pharmaciens | officines-pharmaciens';
        $this
            ->setName('biogaran:import:neo')
            ->setDescription('Read CSV files from Neo and import in database')
            ->addOption('group', null, InputOption::VALUE_OPTIONAL, 'Group of imports ('.$groups.')')
            ->addOption('name', null, InputOption::VALUE_OPTIONAL, 'Name of unique import ('.$names.')')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(['<info>', '=====================', '= Launch Neo Import =', '=====================', '</info>']);
        $this->container = $this->getContainer();
        $this->importManager = $this->getContainer()->get('app.import_manager');
        $this->logger = $this->getContainer()->get('monolog.logger.import');
        $this->logger->info(sprintf('Launch Neo Import (group=%s, name=%s)', $input->getOption('group'), $input->getOption('name')));
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $fileUtils = $this->fileUtils;
            $allImportParams = $this->getImportParams($input);

            foreach ($allImportParams as $importName => $importParams) {
                $output->writeln(['<info>===== Import '.$importName.' =====</info>', '']);
                $this->logger->info(sprintf('Import %s', $importName));

                $batchSize = isset($importParams['batchSize']) ? $importParams['batchSize'] : 1;

                if (!$this->container->hasParameter('import_dir')) {
                    throw new NotFoundResourceException("Import directory not found in parameters");
                }
                $importDir = $this->container->getParameter('import_dir');

                foreach ($fileUtils::scanFiles($importDir, $importParams['filePattern']) as $file) {
                    $output->writeln(['<info>- Import file '.$file.'</info>']);

                    $importLog = $this->importManager->import($file, $importParams['entity'], $importParams['type'], $importParams['mode'], $batchSize, $importParams['encoding']);

                    $output->writeln(['<info>-> '.$importLog.'</info>', '']);
                }
            }

            $output->writeln(['<info>Import done !</info>']);
        } catch (\Exception $e) {
            $this->logger->critical('Fatal error during import', array('exception' => $e));
            throw $e;
        }
    }

    /**
     * @param InputInterface $input
     *
     * @return array
     */
    private function getImportParams(InputInterface $input)
    {
        if (!$this->container->hasParameter('import')) {
            throw new NotFoundResourceException("Import config not found");
        }
        $importConfig = $this->container->getParameter('import');

        $groupOption = $input->getOption('group');
        $nameOption = $input->getOption('name');

        $importParams = array();
        foreach ($importConfig as $groupName => $groupParams) {
            if ($groupOption && $groupOption !== $groupName) {
                continue;
            }
            foreach ($groupParams as $itemName => $itemParams) {
                if ($nameOption && $nameOption !== $itemName) {
                    continue;
                }
                $importParams[$itemName] = $itemParams;
            }
        }

        if (count($importParams) == 0) {
            throw new \Exception("No import to launch");
        }

        return $importParams;
    }
}