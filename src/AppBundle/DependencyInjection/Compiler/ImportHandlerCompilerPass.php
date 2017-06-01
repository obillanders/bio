<?php

namespace AppBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class ImportHandlerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('app.import_manager')) {
            return;
        }

        $definition = $container->findDefinition('app.import_manager');

        $taggedServices = $container->findTaggedServiceIds('app.import_handler');

        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $tag) {
                if (isset($tag['handler_type'])) {
                    $definition->addMethodCall('addImportHandler', array(new Reference($id), $tag['handler_type']));
                }
            }
        }
    }
}
