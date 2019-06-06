<?php
  public function testTexto(): void {
    $_POST = [
      "idade" => "Olá!"
    ];

    $resultado = $this->validaIdade();

    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertFalse($resultado, "Sua função está retornando true, mas deveria retornar false");
  }

  public function testMaiorDeIdade(): void {
    $_POST = [
      "idade" => 18
    ];

    $resultado = $this->validaIdade();

    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertTrue($resultado, "Sua função está retornando false, mas deveria retornar true");
  }

  public function testMaiorDeIdade2(): void {
    $_POST = [
      "idade" => 32
    ];

    $resultado = $this->validaIdade();

    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertTrue($resultado, "Sua função está retornando false, mas deveria retornar true");
  }

  public function testMenorDeIdade(): void {
    $_POST = [
      "idade" => 17
    ];

    $resultado = $this->validaIdade();

    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertFalse($resultado, "Sua função está retornando true, mas deveria retornar false");
  }

  public /*...content...*/
