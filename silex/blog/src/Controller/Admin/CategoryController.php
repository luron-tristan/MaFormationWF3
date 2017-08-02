<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
/**
 * Description of CategoryController
 *
 * @author Hello
 */
class CategoryController extends ControllerAbstract 
{
    public function listAction()
    {
        $categories = $this->app['category.repository']->findAll();
        
        return $this->render(
            'admin/category/list.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
