<?php

use AppBundle\Command\ImportCommand;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class ImportCommandTest extends WebTestCase
{
    private $em;
    private $bddLogsRepo;
    private $pharmacienRepo;

    public function setUp()
    {
        /*$this->fixtures = $this->loadFixtureFiles([]);

        $em = $this->getContainer()->get('doctrine')->getManager();
        $this->bddLogsRepo = $em->getRepository('AppBundle:ImportLog');
        $this->pharmacienRepo = $em->getRepository('AppBundle:Pharmacien');*/
    }

    private function execGetImportParams($groupOption = null, $nameOption = null, $config = null) {

        $importCommand = new ImportCommand();

        $class = new ReflectionClass(ImportCommand::class);
        $property = $class->getProperty('container');
        $property->setAccessible(true);
        $method = $class->getMethod('getImportParams');
        $method->setAccessible(true);

        $inputMock = \Phake::mock(InputInterface::class);
        \Phake::when($inputMock)->getOption('group')->thenReturn($groupOption);
        \Phake::when($inputMock)->getOption('name')->thenReturn($nameOption);

        $containerMock = \Phake::mock(ContainerInterface::class);
        \Phake::when($containerMock)->hasParameter('import')->thenReturn($config !== null);
        \Phake::when($containerMock)->getParameter('import')->thenReturn($config);
        $property->setValue($importCommand, $containerMock);

        return $method->invoke($importCommand, $inputMock);
    }

    public function testGetImportParams_configNotFound() {
        // When
        try {
            $this->execGetImportParams();
            // Then
            $this->fail("NotFoundResourceException expected");
        } catch (NotFoundResourceException $e) {
            // Then
            $this->assertEquals("Import config not found", $e->getMessage());
        }
    }

    public function testGetImportParams_noImportParams() {
        // When
        try {
            $this->execGetImportParams('group', 'name', array(
                'config' => array()
            ));
            // Then
            $this->fail("Exception expected");
        } catch (\Exception $e) {
            // Then
            $this->assertEquals("No import to launch", $e->getMessage());
        }
    }

    public function testGetImportParams_allImportParams() {
        // When
        $importParams = $this->execGetImportParams(null, null, array(
            'import-group1' => array(
                'import1' => 'config1',
                'import2' => 'config2'
            ),
            'import-group2' => array(
                'import3' => 'config3'
            )
        ));

        // Then
        $this->assertEquals(3, count($importParams));
        $this->assertTrue(isset($importParams['import1']));
        $this->assertEquals('config1', $importParams['import1']);
        $this->assertTrue(isset($importParams['import2']));
        $this->assertEquals('config2', $importParams['import2']);
        $this->assertTrue(isset($importParams['import3']));
        $this->assertEquals('config3', $importParams['import3']);
    }

    public function testGetImportParams_filterByGroup() {
        // When
        $importParams = $this->execGetImportParams('import-group2', null, array(
            'import-group1' => array(
                'import1' => 'config1',
                'import2' => 'config2'
            ),
            'import-group2' => array(
                'import3' => 'config3'
            )
        ));

        // Then
        $this->assertEquals(1, count($importParams));
        $this->assertTrue(isset($importParams['import3']));
        $this->assertEquals('config3', $importParams['import3']);
    }

    public function testGetImportParams_filterByName() {
        // When
        $importParams = $this->execGetImportParams(null, 'import2', array(
            'import-group1' => array(
                'import1' => 'config1',
                'import2' => 'config2'
            ),
            'import-group2' => array(
                'import3' => 'config3'
            )
        ));

        // Then
        $this->assertEquals(1, count($importParams));
        $this->assertTrue(isset($importParams['import2']));
        $this->assertEquals('config2', $importParams['import2']);
    }

    /*public function testExecute()
    {
        $output = $this->runCommand('biogaran:import:run', array('--import-names' => 'import-csv-1'));

        $bddLogs = $this->bddLogsRepo->findAll();
        $pharmaciens = $this->pharmacienRepo->findAll();

        $this->assertContains('Done !', $output);
        $this->assertCount(1, $bddLogs);
        $this->assertCount(3, $pharmaciens);

        $output = $this->runCommand('biogaran:import:run', array('--import-names' => 'import-csv-2'));

        $bddLogs = $this->bddLogsRepo->findAll();
        $pharmaciens = $this->pharmacienRepo->findAll();

        $this->assertContains('Done !', $output);
        $this->assertCount(2, $bddLogs);
        $this->assertCount(4, $pharmaciens);
    }

    public function testExecuteFailBatch()
    {
        $output = $this->runCommand('biogaran:import:run', array('--import-names' => 'import-csv-batch-fail'));

        $bddLogs = $this->bddLogsRepo->findAll();
        $pharmaciens = $this->pharmacienRepo->findAll();

        $this->assertContains('Done !', $output);
        $this->assertCount(1, $bddLogs);
        $this->assertCount(5, $pharmaciens);
    }

    public function testExecuteWithEntitiesErrors()
    {
        $output = $this->runCommand('biogaran:import:run', array('--import-names' => 'import-csv-with-errors'));

        $bddLogs = $this->bddLogsRepo->findAll();

        $this->assertContains('Done !', $output);
        $this->assertCount(1, $bddLogs);

        $errorsEntitiesMessages = $bddLogs[0]->getErrorsEntitiesMessages();

        $this->assertRegExp('/^(Pharmacien\[10152\]->nom)(.*)(This value is too long\. It should have 50 characters or less\.)$/', $errorsEntitiesMessages);
        $this->assertCount(1, $bddLogs[0]->getFailEntities());
    }*/
}