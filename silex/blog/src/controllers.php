<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

$app
    ->match('/utilisateur/inscription', 'user.controller:registerAction')
    ->bind('user_register')
;

$app
    ->match('/utilisateur/connexion', 'user.controller:loginAction')
    ->bind('user_login')
;

$app
    ->match('/utilisateur/deconnexion', 'user.controller:logoutAction')
    ->bind('user_logout')
;

$app
    ->get('/rubrique/{id}', 'category.controller:indexAction')
    ->assert('id', '\d+') // id doit être un nombre
    ->bind('category_index')
;


/*****************************************************************************/
// Créer la page article dans une action d'un controller ArticleController
// et ajouter le lien dans chacun des éléments des listes d'articles
$app
    ->match('/article/{id}', 'article.controller:indexAction')
    ->assert('id', '\d+')
    ->bind('article_index')
;

/*****************************************************************************/




/* BACK */

// Crée un groupe de routes
$admin = $app['controllers_factory'];

/*
 * Pour toutes les routes du groupe,
 * si on n'est pas connecté en admin, on se prend une 403
 */
$admin->before(function() use ($app) {
    if(!$app['user.manager']->isAdmin()) {
        $app->abort(403, 'Accès refusé');
    }
});

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
/* Article */

$admin
    ->get('/article', 'admin.article.controller:listAction')
    ->bind('admin_articles')
;

$admin
    ->match('/article/edition/{id}', 'admin.article.controller:editAction')
    ->value('id', null) // valeur par défaut pour l'id, la route matche même sans id
    ->bind('admin_article_edit')
;

$admin
    ->get('/article/suppression/{id}', 'admin.article.controller:deleteAction')
    ->assert('id', '\d+') // id doit être un nombre
    ->bind('admin_article_delete')
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
