<?php

use Marlosoft\Framework\Core\Application;

require_once(dirname(__DIR__) . '/vendor/autoload.php');
require_once(dirname(__DIR__) . '/config/bootstrap.php');

Application::getInstance()->dispatch();
