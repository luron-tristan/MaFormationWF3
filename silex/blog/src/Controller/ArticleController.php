<?php

namespace Controller;

/**
 * Description of ArticleController
 *
 * @author Hello
 */
class ArticleController extends ControllerAbstract {
    public function indexAction($id) 
    {
        $article = $this->app['article.repository']->find($id);
        
        return $this->render(
            'article/index.html.twig',
            ['article' => $article]
        );
    }
}
