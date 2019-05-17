<?php

define('APP_ROOT', __DIR__);

spl_autoload_register(function ($class){
    require APP_ROOT . "\.." . "\\" . $class . '.php';
});