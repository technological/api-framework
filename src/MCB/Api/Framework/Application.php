<?php
namespace MCB\Api\Framework;

class Application
{
    private $routes = array();
    
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }
    
    public function run()
    {
        $path_info = '/';
        $path_info = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : $path_info;
        $path_info = (isset($_SERVER['ORIG_PATH_INFO'])) ? $_SERVER['ORIG_PATH_INFO'] : $path_info;
        
        foreach ($this->routes as $route => $handler) {
            $pattern = '#^/?' . $route . '/?$#';
            if (preg_match($pattern, $path_info, $parameters) && false !== strpos(':', $handler)) {
                $route = array_shift($parameters);
                list($controller, $action) = explode(':', $handler);
                break;
            }
        }
        
        if (isset($controller, $action) && is_callable(array($controller, $action))) {
            $controller_instance = new $controller;
            call_user_func_array(array($controller_instance, $action), $parameters);
        }
        else {
            header('HTTP/1.0 404 Not Found');
            die('No matching route.');
        }
    }
}