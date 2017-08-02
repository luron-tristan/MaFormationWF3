<?php

namespace Controller;

use Controller\ControllerAbstract;

class CategoryController extends ControllerAbstract
{
    public function listAction()
    {
        // appel à la méthode findAll() de la classe Repository\CategoryRepository
        // nécessite qu'elle ait été déclarée en service dans src\app.php
        $categories = $this->app['category.repository']->findAll();        
        
        return $this->render('category/list.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
