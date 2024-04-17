<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_plenta_jobs_basic_offer']['fields']['hideInList'] = [
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => [
        'tl_class' => 'w50 m12',
        'isBoolean' => true,
    ],
    'sql' => [
        'type' => 'boolean',
        'default' => false,
    ],
];

PaletteManipulator::create()
    ->addField('hideInList', 'cssClass')
    ->applyToPalette('default', 'tl_plenta_jobs_basic_offer')
;
