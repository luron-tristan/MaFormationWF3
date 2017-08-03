<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;

/**
 * Description of ArticleController
 *
 * @author Hello
 */
class ArticleController extends ControllerAbstract
{
    public function listAction()
    {
        $articles = $this->app['article.repository']->findAll();
        
        return $this->render(
            'admin/article/list.html.twig',
            [
                'articles' => $articles
            ]
        );
    }
}
