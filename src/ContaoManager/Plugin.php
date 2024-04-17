<?php

namespace DVC\PlentaJobsHideInList\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DVC\PlentaJobsHideInList\PlentaJobsHideInListBundle;
use Plenta\ContaoJobsBasic\PlentaContaoJobsBasicBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(PlentaJobsHideInListBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                    PlentaContaoJobsBasicBundle::class,
                ])
        ];
    }
}
