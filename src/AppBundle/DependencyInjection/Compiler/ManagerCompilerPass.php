<?php

namespace AppBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;


class ManagerCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('app.manager_locator')) {
            return;
        }

        $definition = $container->findDefinition('app.manager_locator');

        $taggedServices = $container->findTaggedServiceIds('app.manager');

        foreach ($taggedServices as $id => $tags) {
            $managerDefinition = $container->getDefinition($id);
            $definition->addMethodCall('addManager', array(new Reference($id), $managerDefinition->getArgument(0)));
        }
    }
}