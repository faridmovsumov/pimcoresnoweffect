<?php

namespace FaridMovsumov\PimcoreSnowEffectBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class FaridMovsumovPimcoreSnowEffectBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/faridmovsumovpimcoresnoweffect/js/pimcore/startup.js'
        ];
    }
}
 