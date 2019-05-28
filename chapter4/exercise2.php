<?php
  public function testWalterWhite(): void {
    $_GET = [
      "nome" => "Walter",
      "sobrenome" => "White"
    ];

    $resultado = $this->saudacoes();
    $this->assertTrue(is_string($resultado), "Sua função não está devolvendo uma string...");
    $this->assertTrue(strtolower($resultado) == "oi walter white", "Esse resultado não é o esperado quando a URL é: http://digitalcommerce.com/saudacao.php?nome=Walter&sobrenome=White. Era esperado 'Produto 32' e obtive '$resultado'");
  }

  public function testJessePinkman(): void {
    $_GET = [
      "nome" => "Jesse",
      "sobrenome" => "Pinkman"
    ];

    $resultado = $this->saudacoes();
    $this->assertTrue(is_string($resultado), "Sua função não está devolvendo uma string...");
    $this->assertTrue(strtolower($resultado) == "oi walter white", "Esse resultado não é o esperado quando a URL é: http://digitalcommerce.com/saudacao.php?nome=Walter&sobrenome=White. Era esperado 'Produto 32' e obtive '$resultado'");
  }

  public /*...content...*/
