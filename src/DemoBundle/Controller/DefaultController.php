<?php

namespace DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DefaultController extends Controller
{
    /**
     * DOC 2
     *
    @Get("/interco/test")
     */
    public function getIntercoTestAction()
    {
        die('test ok');
    }

    /**
     *
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  section="DOC_3",
     *  description="API interface doc",
     * )
     * @Get("/interco/doc")
     */
    public function getIntercoApiDocAction()
    {
        die('doc ok');
    }

}
