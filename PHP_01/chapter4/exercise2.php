<?php
  public function testWalterWhite(): void {
    $_GET = [
      "nome" => "Walter",
      "sobrenome" => "White"
    ];

    $resultado = $this->saudacoes();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "oi walter white", "Esse resultado não é o esperado quando a URL é: http://digitalcommerce.com/saudacao.php?nome=Walter&sobrenome=White. Era esperado 'Oi Walter White' e obtive '$resultado'");
  }

  public function testJessePinkman(): void {
    $_GET = [
      "nome" => "Jesse",
      "sobrenome" => "Pinkman"
    ];

    $resultado = $this->saudacoes();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "oi jesse pinkman", "Esse resultado não é o esperado quando a URL é: http://digitalcommerce.com/saudacao.php?nome=Jesse&sobrenome=Pinkman. Era esperado 'Oi Jesse Pinkman' e obtive '$resultado'");
  }

  public /*...content...*/
