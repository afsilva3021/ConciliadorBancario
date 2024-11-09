<?php

namespace relatorioconciliado;

class Router
{
  private $routes = [];

  public function addRoute($path, $controller, $method)
  {
    $route = new Route($path, $controller, $method);
    $this->routes[] = $route;
  }

  public function handleRequest($requestPath)
  {
    foreach ($this->routes as $route) {
      if ($route->getPath() === $requestPath) {
        $controllerName = $route->getController();
        $methodName = $route->getMethod();
        $controller = new $controllerName();
        $controller->$methodName();
        return;
      }
    }

    header('HTTP/1.1 404 Not Found');
    echo "404 Not Found";
  }
}
