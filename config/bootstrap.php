<?php

use Marlosoft\Framework\Components\Logger;
use Marlosoft\Framework\Core\Config;
use Marlosoft\Framework\Views\TemplateView;

/** Application error handler*/
Config::set('app.errorHandler', function (Exception $exception) {
    $view = new TemplateView('error.phtml');
    $view->setVariables(['exception' => $exception]);
    $view->setStatus($exception->getCode());
    $view->createResponse();
});

/** Routing configurations - PHP file must return array */
Config::set('route.path', __DIR__ . '/routes.php');

/** View files directory path*/
Config::set('view.path', dirname(__DIR__) . '/src/Views');
Config::set('view.template', 'template.phtml');

/** Logger configuration */
Config::set('log.level', Logger::DEBUG);
Config::set('log.file', dirname(__DIR__) . '/var/log/app.log');

/** Database PDO configuration */
Config::set('database.dsn', 'mysql:host=localhost;dbname=webapp');
Config::set('database.username', 'root');
Config::set('database.password', 'password');
