<?php
  public function testNomeCompleto(): void {
    $_POST = [
      "nome" => "Thomaz",
    ];

    $resultado = $this->validarNome();
    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertTrue($resultado, 'Sua função está retornando false, mas deveria retornar true');
  }

  public function testNomeVazio(): void {
    $_POST = [
      "nome" => "",
    ];

    $resultado = $this->validarNome();
    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertFalse($resultado, 'Sua função está retornando true, mas deveria retornar false');
  }

  public /*...content...*/
