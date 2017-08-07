<?php

use Controller\Admin\ArticleController;
use Controller\Admin\CategoryController as CategoryController2;
use Controller\CategoryController;
use Controller\IndexController;
use Repository\CategoryRepository;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    // Pour accéder au UserManager dans les templates twig
    $twig->addGlobal('user_manager', $app['user.manager']);

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

// $app['session'] = gestionnaire de session de symfony
$app->register(new SessionServiceProvider());

/* CONTROLLERS */

/* Front */
$app['index.controller'] = function() use($app){
    return new IndexController($app);
};

$app['category.controller'] = function() use($app){
    return new CategoryController($app);
};

$app['user.controller'] = function() use($app){
    return new Controller\UserController($app);
};

/*****************************************************************************/
$app['article.controller'] = function() use($app){
    return new Controller\ArticleController($app);
}
;
/*****************************************************************************/

/* Articles */
$app['admin.article.controller'] = function() use($app){
    return new ArticleController($app);
};



/* Back */

$app['admin.category.controller'] = function() use($app){
    return new CategoryController2($app);
};

/* REPOSITORIES */
$app['category.repository'] = function() use($app){
    return new CategoryRepository($app);
};

$app['article.repository'] = function() use($app){
    return new Repository\ArticleRepository($app);
};

$app['user.repository'] = function() use($app){
    return new Repository\UserRepository($app);
};

/* AUTRES SERVICES */
$app['user.manager'] = function() use($app){
    return new Service \UserManager($app['session']);
};



return $app;
