<?php

namespace Controller;

use Silex\Application;

class DemoController {
    public function helloWorldAction(Application $app)
    {
        return $app['twig']->render('helloWorld.html.twig');
    }
    
    /**
     * Le paramètre $name correspond à ce que contoent {name} dans la route
     * 
     * @param Application $app l'instance de Silex\Application
     * @param string $name $name la variable venant de l'url
     */
    public function helloAction(Application $app, $name)
    {
        return $app['twig']->render(
            'hello.html.twig',
            [
                'name' => $name
            ]
        );
    }
}
