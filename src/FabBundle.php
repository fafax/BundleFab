<?php

namespace BundleFab;

use BundleFab\DependencyInjection\BundleFabExtention;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FabBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new BundleFabExtention([],$container);

    }

}