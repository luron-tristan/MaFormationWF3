<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Article;
use Entity\Category;

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
    
    public function editAction($id = null)
    {
        if(!is_null($id))
        {
            // on va chercher la catégorie en bdd
            $article = $this->app['article.repository']->find($id);
        } else {
            // nouvelle catégorie
            $article = new Article();
            $article->setCategory(new Category());
        }
        
        // On a besoin de la liste des rubriques  pour construire le select
        // dans le formulaire
        $categories = $this->app['category.repository']->findAll();
        $errors = [];
        
        if(!empty($_POST))
        {
            $article
                ->setTitle($_POST['title'])
                ->setHeader($_POST['header'])
                ->setContent($_POST['content'])
            ;
            
            $article->getCategory()->setId($_POST['category']);
            
            if(empty($_POST['title'])) 
            {
                $errors['title'] = 'Le titre est obligatoire';
            } elseif (strlen($_POST['title']) > 100) {
                $errors['content'] = 'Le titre ne doit pas faire plus de 100 caractères';
            }
            
            if(empty($_POST['header'])) 
            {
                $errors['header'] = 'L\'en-tête est obligatoire';
            }
            
            if(empty($_POST['content'])) 
            {
                $errors['content'] = 'Le contenu est obligatoire';
            }
            
            if(empty($_POST['category'])) 
            {
                $errors['category'] = 'La rubrique est obligatoire';
            }
            
            if(empty($errors))
            {
                $this->app['article.repository']->save($article);

                $this->addFlashMessage('L\'article a été enregistré');
                return $this->redirectRoute('admin_articles');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
         return $this->render(
            'admin/article/edit.html.twig',
            [
                'article' => $article,
                'categories' => $categories
            ]
        );                 
    }
    
    public function deleteAction($id)
    {
        $article = $this->app['article.repository']->find($id);
        
        if(empty($article)){
            $this->app->abort(404);
        }
        
        $this->app['article.repository']->delete($article);
        
        $this->addFlashMessage('L\'article a bien été supprimé');
        
        return $this->redirectRoute('admin_articles');
    }
}
