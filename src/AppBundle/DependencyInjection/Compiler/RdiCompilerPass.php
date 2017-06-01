<?php

namespace AppBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class RdiCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('app.manager.rdi')) {
            return;
        }

        $definition = $container->findDefinition('app.manager.rdi');

        $taggedServices = $container->findTaggedServiceIds('app.rdi_handler');

        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $tag) {
                if (isset($tag['handler_type'])) {
                    $definition->addMethodCall('addRdiHandler', array(new Reference($id), $tag['handler_type']));
                }
            }
        }
    }
}
