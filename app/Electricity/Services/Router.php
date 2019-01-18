<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.01.19
 * Time: 6:15
 */

namespace Electricity\Services;


use Electricity\Model\Agent\Controller\AgentController;

class Router
{
    /**
     * @var array
     */
    private $routes=[];

    /**
     * Router constructor.
     * @param $routes
     */
    public function __construct($routes)
    {
        $this->routes = $routes;
    }


    public function dispatch()
    {
        $klein = new \Klein\Klein();

//        $klein->respond('GET', '/hello-world', function () {
//            return 'Hello World!';
//        });

        foreach ($this->routes as $route){

            $klein->respond(
                $route['method'],
                $route['path'],
                function ($request, $response) use($route){

                $controller = DiContainer::getInstance()->make($route['className']);
                if ($controller instanceof ControllerInterface){
                    return $controller->execute($request, $response);
                } else{

                    throw new SystemException("Controller Class " . $route['className'] . " not found");
                }



            });
        }



        $klein->dispatch();

    }

    /**
     * @return \DI\Container
     * @throws \Exception
     */
    private function getDiContainer()
    {
        return DiContainer::getInstance();
    }


}