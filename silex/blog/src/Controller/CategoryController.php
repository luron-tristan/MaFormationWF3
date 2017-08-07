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
    
    /*
     * Faire la page rubrique qui a pour titre le nom de la rubrique
     * et qui affiche les articles de la rubrique
     * en utilisant la vue article_list.html.twig
     */
    public function indexAction($id)
    {
        $category = $this->app['category.repository']->find($id);
        $articles = $this->app['article.repository']->findByCategory($category);
  
        return $this->render(
            'category/index.html.twig',
                [
                    'category' => $category,
                    'articles' => $articles
                ]
        );
    }
    
}
