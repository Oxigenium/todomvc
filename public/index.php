<?php
/**
 * PHP router
 */

$routes = explode('/',explode('?',$_SERVER['REQUEST_URI'])[0] ?? '123');

print_r(realpath("../Controllers/PageController"));

echo createResponse($routes, $_GET, $_POST);
return;


function createResponse ($routes, $query = [], $body = []) {
    switch ($routes[1] ?? false)
    {
        case 'api':
            switch ($routes[2] ?? false) {
                case '':
                    return useControllerMethod('ApiController','index');

                case '':
                case false:
                default:
                    return useControllerMethod('ApiController','index');
            }
        case 'page':
            return;
        case false:
        default:
            return useControllerMethod();
    }
}

function useControllerMethod($controller = 'PageController',$method = 'index',$params = [], $query = [], $body = [])
{
    require_once(realpath("../Controllers/$controller.php"));
    return call_user_func_array(["Controllers\\$controller",$method], $params);
}