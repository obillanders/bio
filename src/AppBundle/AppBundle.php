<?php

namespace AppBundle;

use AppBundle\DependencyInjection\Compiler\RdiCompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use AppBundle\DependencyInjection\Compiler\ManagerCompilerPass;
use AppBundle\DependencyInjection\Compiler\ImportHandlerCompilerPass;

class AppBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ManagerCompilerPass());
        $container->addCompilerPass(new ImportHandlerCompilerPass());
        $container->addCompilerPass(new RdiCompilerPass());
    }
}
