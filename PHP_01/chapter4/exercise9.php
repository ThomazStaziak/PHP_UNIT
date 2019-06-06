<?php
  public function testEmailCorreto(): void {
    $_POST = [
      "email" => "thomaz@digitalhouse.com"
    ];

    $resultado = $this->validaEmail();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "correto", "Sua função está falhando com 'thomaz@digitalhouse.com' como e-mail. Foi recebido '$resultado' e era esperado 'Correto'");
  }

  public function testEmailVazio(): void {
    $_POST = [
      "email" => ""
    ];

    $resultado = $this->validaEmail();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "o campo está vazio", "Sua função está falhando com o e-mail vazio. Foi recebido '$resultado' e era esperado 'O campo está vazio'");
  }

  public function testEmailIncorreto(): void {
    $_POST = [
      "email" => "thomaz@"
    ];

    $resultado = $this->validaEmail();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "o campo não é um e-mail", "Sua função está falhando com o e-mail 'thomaz@'. Foi recebido '$resultado' e era esperado 'O campo não é um e-mail'");
  }

  public /*...content...*/
