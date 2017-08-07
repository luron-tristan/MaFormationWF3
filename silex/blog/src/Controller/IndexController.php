<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 10:46
 */

namespace Controller;


class IndexController extends ControllerAbstract
{
    public function indexAction(){
        
        $articles = $this->app['article.repository']->findAll();
        
        return $this->render(
            'index.html.twig',
            ['articles' => $articles]
        );
    }

}