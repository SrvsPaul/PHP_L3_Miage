<?php namespace Util;

use Util\View;

class Route
{
    public function __construct()
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);
        $namespace = "Controllers";
        $controller = $request[count($request)-2];  //;"contactcontroller"$request[count($request)-1]
        $method = $request[count($request)-1];
        if ($method == '' || $method == 'index.php')
        {
            $controller = "ContactController";
            $method = "listContact";
        }
        $class = $namespace."\\".$controller;

        if (! class_exists($class)) {
            return $this->not_found();
        }



        if (! method_exists($class, $method)) {
            return $this->not_found();
        }

        $classInstance = new $class;

        call_user_func_array(array($classInstance, $method), $args=[]);
    }

    public function not_found()
    {
        $view = new View();
        return $view->render('404');
    }

    private function testUrl() : int
    {
        $request = explode('/', $_SERVER['REQUEST_URI']);
        return count($request);
    }
}