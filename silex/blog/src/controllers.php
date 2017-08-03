<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* FRONT */

$app
    ->get('/', 'index.controller:indexAction')
    ->bind('homepage')
;
//$app->get('/', function () use ($app) {
//    return $app['twig']->render('index.html.twig', array());
//})
//->bind('homepage')
//;

$app
    ->get('/rubrique/liste', 'category.controller:listAction')
    ->bind('category_list')
;

/* BACK */

// Crée un groupe de routes
$admin = $app['controllers_factory'];

// toutes les routes définies par $admin
// auront une url commençant pas /admin sans avoir à l'ajouter dans chaque route
$app->mount('/admin', $admin);

// L'URL de cette route est /admin/rubriques
$admin
    ->get('/rubriques', 'admin.category.controller:listAction')
    ->bind('admin_categories')
;

// La route matche à la fois /rubrique/edition et /rubrique/edition/1
$admin
    ->match('/rubrique/edition/{id}', 'admin.category.controller:editAction')
    ->value('id', null) // valeur par défaut pour l'id
    ->bind('admin_category_edit')
;

$admin
    ->get('/rubrique/suppression/{id}', 'admin.category.controller:deleteAction')
    ->assert('id', '\d+') // id doit être un nombre
    ->bind('admin_category_delete')
;

/**
 * Créer la partie admin pour les articles :
 * 
 * créer le controller Admin\ArticleController qui hérite de ControllerAbstract
 * le définir en service sans src/app.php
 * y ajouter la méthode listAction() qui va rendre la vue admin/article/list/html.twig
 * créer la vue
 * créer la route qui pointe sur l'action de controller
 * ajouter un lien vers cette route dans la navbar admin
 * créer l'entity Article et le repository  en service dans src/app.php
 * remplir la méthode listAction() en utilisant ArticleRepository
 * faire l'affichage en tabeau html dans la vue
 */

$app
    ->get('/article/liste', 'article.controller:listAction')
    ->bind('article_list')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
