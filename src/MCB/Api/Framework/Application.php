<?php
namespace MCB\Api\Framework;

class Application
{
    public function run()
    {
        $parameters = $this->getRequestParameters($_SERVER['REQUEST_METHOD']);
        
        $controller_instance = new \MCB\Api\Controller\TestController();
        $method = 'get';
        
        call_user_func_array(array($controller_instance, $method), $parameters);
    }
    
    private function getRequestParameters($method)
    {
        $parameters = array();
        
        switch (strtoupper($method)) {
            case 'GET':
                $parameters = $_GET;
            break;
            case 'POST':
                $parameters = $_POST;
            break;
            case 'PUT':
                parse_str(file_get_contents('php://input', $parameters));
            break;
        }
        
        return $parameters;
    }
}