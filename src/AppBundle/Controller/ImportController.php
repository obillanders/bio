<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ImportController extends Controller
{
    public function indexAction(Request $request)
    {
        $imports = $this->getImportsInfos();

        foreach ($imports as $importName => $import) {
            $this->runImport($import, $importName);
        }

        return new Response("ok");

        return $this->render(':default:homepage.html.twig');
    }

    private function runImport($import, $importName)
    {
        $importManager = $this->container->get('app.import_manager');
        foreach ($import['files'] as $filePath => $entity) {
            $importManager->import($filePath, $entity, $import['type'], 5);
        }
    }

    private function getImportsInfos()
    {
        if (!$this->container->hasParameter('import')) {
            throw new \Exception("Import config not found");
        }

        return $this->container->getParameter('import');
    }
}
