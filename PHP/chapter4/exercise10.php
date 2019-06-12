<?php
  public function testSenhaVazias(): void {
    $_POST = [
      "senha" => "",
      "confirmaSenha" => "",
    ];

    $resultado = $this->validaSenha();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "os dois campos de senha estão vazios", "A função está falhando com os campos vazios. Foi recebido '$resultado' e era esperado 'os dois campos de senha estão vazios'");
  }

  public function testSemSenha(): void {
    $_POST = [
      "senha" => "",
      "confirmaSenha" => "123",
    ];

    $resultado = $this->validaSenha();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "a senha está vazia", "A função está falhando com o campo senha vazio. Foi recebido '$resultado' e era esperado 'A senha está vazia'");
  }

  public function testSemConfirmar(): void {
    $_POST = [
      "senha" => "123",
      "confirmaSenha" => "",
    ];

    $resultado = $this->validaSenha();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "o campo confirmar senha está vazio", "A função está falhando com o campo confirmar senha vazio. Foi recebido '$resultado' e era esperado 'O campo confirmar senha está vazio'");
  }

  public function testSenhasDivergentes(): void {
    $_POST = [
      "senha" => "123",
      "confirmaSenha" => "111",
    ];

    $resultado = $this->validaSenha();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "senhas não coincidem", "A função está falhando quando as senhas são divergentes. Foi recebido '$resultado' e era esperado 'Senhas não coincidem'");
  }

  public function testCorreto(): void {
    $_POST = [
      "senha" => "123",
      "confirmaSenha" => "123",
    ];

    $resultado = $this->validaSenha();

    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string :(");

    $this->assertTrue(strtolower($resultado) == "correto", "A função está falhando quando as senhas estão corretas. Foi recebido '$resultado' e era esperado 'Correto'");
  }

  public /*...content...*/
