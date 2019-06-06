<?php
  public function testBuscaCamiseta(): void {
    $_GET = [
      "busca" => "Camiseta"
    ];

    $resultado = $this->buscador();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "o termo buscado foi camiseta", "Esse resultado não é o esperado quando a URL é: http://digitalecommerce.com/buscador.php?busca=Camiseta. Era esperado 'O termo buscado foi Camiseta' e obtive '$resultado'");
  }

  public function testBuscaMochila(): void {
    $_GET = [
      "busca" => "Mochila"
    ];

    $resultado = $this->buscador();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "o termo buscado foi mochila", "Esse resultado não é o esperado quando a URL é: http://digitalecommerce.com/buscador.php?busca=Mochila. Era esperado 'O termo buscado foi Mochila' e obtive '$resultado'");
  }

  public function testBuscaCamisetaPorData(): void {
    $_GET = [
      "busca" => "Camiseta",
      "ordenar" => "Data"
    ];

    $resultado = $this->buscador();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "o termo buscado foi camiseta ordenado por data", "Esse resultado não é o esperado quando a URL é:e http://digitalecommerce.com/buscador.php?busca=Camiseta&ordenar=Data. Era esperado 'O termo buscado foi Camiseta ordenado por data' e obtive '$resultado'");
  }

  public /*...content...*/
