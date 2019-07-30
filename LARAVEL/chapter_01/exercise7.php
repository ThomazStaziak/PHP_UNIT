<?php
  public function testPrimeiraRota(): void {
    global $passouPelaView;
    
    $passouPelaView = false;
    
    $rotasGet = Route::$routesGet;
    
    $this->assertTrue(count($rotasGet) == 1, "Deveria ter uma rota por GET");
    
    $inicioRota = $rotasGet[0];
    
    $this->assertTrue($inicioRota["route"] == "inicio" || $inicioRota["route"] == "/inicio", "A rota /inicio não está definida");
    
    
    $this->assertTrue($inicioRota["action"] instanceof Closure, "O segundo parâmetro da rota deve ser uma função anônima");
    
    $resul = $inicioRota["action"]();
    
    $this->assertTrue($passouPelaView, "Parece que você não está mandando para uma view");
    
    // $this->assertTrue($resul == "inicio", "Parecería que no estas retornando el resultado o que enviaste el nombre incorrecto a la función view");
  }
  
  // Extra Code
  $passouPelaView = false;

  function view($route, $vac = []) {
    global $passouPelaView;
    $passouPelaView = true;
    return $route;
  }

  class Route {
    public static $routesGet = [];
    public static $routesPost = [];

    public static function get($route, $action) {
      $newRoute = [
        "route" => $route,
        "action" => $action
      ];
      
      Route::$routesGet[] = $newRoute;
    }
    
    public static function post($route, $action) {
      $newRoute = [
        "route" => $route,
        "action" => $action
      ];
      
      Route::$routesPost[] = $newRoute;
    }

  }