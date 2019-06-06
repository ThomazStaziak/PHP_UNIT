<?php
  public function testProduto32(): void {
    $_GET = [
      "id" => 32
    ];
    $resultado = $this->getProduto();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "produto 32", "Esse resultado não é o esperado quando a URL é: http://digitalcommerce.com/produto.php?id=32. Era esperado 'Produto 32' e obtive '$resultado'");
  }

  public function testProduto58(): void {
    $_GET = [
      "id" => 58
    ];
    $resultado = $this->getProduto();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "produto 58", "Esse resultado não é o esperado quando a URL é: http://digitalcommerce.com/produto.php?id=58. Era esperado 'Produto 58' e obtive '$resultado'");
  }

  public /*...content...*/
