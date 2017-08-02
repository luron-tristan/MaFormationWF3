<?php

use Controller\CategoryController;
use Controller\IndexController;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Repository\CategoryRepository;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});




$app->register(
    new DoctrineServiceProvider(),
        [
            'db.options' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'silex_blog',
                'user' => 'root',
                'password' => '',
                'charset' => 'utf8'
            ]
        ]
);

/* CONTROLLERS */

/* Front */
$app['index.controller'] = function() use($app){
    return new \Controller\IndexController($app);
};

$app['category.controller'] = function() use($app){
    return new \Controller\CategoryController($app);
};

/* Back */

$app['admin.category.controller'] = function() use($app){
    return new \Controller\Admin\CategoryController($app);
};

/* REPOSITORIES */
$app['category.repository'] = function() use($app){
    return new Repository\CategoryRepository($app);
};

return $app;
