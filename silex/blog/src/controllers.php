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
