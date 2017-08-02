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
        return $this->render('index.html.twig');
    }

}