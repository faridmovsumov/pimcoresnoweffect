<?php

namespace SnowEffectBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class SnowEffectBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/snoweffect/js/pimcore/startup.js'
        ];
    }
}
