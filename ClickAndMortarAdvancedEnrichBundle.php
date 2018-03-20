<?php

namespace ClickAndMortar\AdvancedEnrichBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Click And Mortar Advanced Enrich bundle
 *
 * @author  Simon CARRE <simon.carre@clickandmortar.fr>
 * @package ClickAndMortar\AdvancedEnrichBundle
 */
class ClickAndMortarAdvancedEnrichBundle extends Bundle
{
    /**
     * Build.
     *
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}