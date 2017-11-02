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


    /**
     * Return array serialzed with the Bundle JMS
     *
     * @ApiDoc(
     *  section="DOC_4",
     *  description="Serializer d’objet",
     * )
     * @Get("/interco/city")
     */
    public function getIntercoCityAction()
    {

        return array (
            0 =>
                array (
                    'city' => 'Sant Julià de Lòria',
                    'region' => '06',
                    'country' => 'AD',
                    'latitude' => '42.46372',
                    'longitude' => '1.49129',
                ),
            1 =>
                array (
                    'city' => 'Pas de la Casa',
                    'region' => '03',
                    'country' => 'AD',
                    'latitude' => '42.54277',
                    'longitude' => '1.73361',
                ));
    }
}
