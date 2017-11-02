<?php

namespace DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;


class DefaultController extends Controller
{
    /**
    @Get("/demo/test")
     */
    public function getIntercoTestAction()
    {
        die('test ok');
    }

}
