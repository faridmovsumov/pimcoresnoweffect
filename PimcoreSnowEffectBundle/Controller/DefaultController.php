<?php

namespace FaridMovsumov\PimcoreSnowEffectBundle\Controller;

use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * @Route("/farid_movsumov_pimcore_snow_effect")
     */
    public function indexAction(Request $request)
    {
        return new Response('Hello world from farid_movsumov_pimcore_snow_effect');
    }
}
