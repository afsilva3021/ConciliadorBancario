<?php

namespace relatorioconciliado;

class Route
{
  private $path;
  private $controller;
  private $method;

  public function __construct($path, $controller, $method)
  {
    $this->path = $path;
    $this->controller = $controller;
    $this->method = $method;
  }

  public function getPath()
  {
    return $this->path;
  }

  public function getController()
  {
    return $this->controller;
  }

  public function getMethod()
  {
    return $this->method;
  }
}
