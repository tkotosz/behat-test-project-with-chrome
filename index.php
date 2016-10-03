<?php

require_once __DIR__.'/vendor/autoload.php'; 

$app = new Silex\Application(); 

$app->get('/hello/{name}', function($name) use($app) { 
    return str_repeat('<br/>', 200) . 'Hello '.$app->escape($name); 
}); 

$app->run(); 