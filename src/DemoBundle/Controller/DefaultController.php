<?php

namespace DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
