<?php
  public function testValidaUsuario(): void {
    $_POST = [
      "usuario" => "thostaziak",
    ];

    $resultado = $this->validaUsuario();

    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertTrue($resultado, 'Sua função está retornando false, mas deveria retornar true');

    $_POST = [
      "usuario" => "",
    ];

    $resultado = $this->validaUsuario();
    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertFalse($resultado, 'Sua função está retornando true, mas deveria retornar false');

    $_POST = [
      "usuario" => "staziak",
    ];

    $resultado = $this->validaUsuario();
    $this->assertTrue(is_bool($resultado), "Sua função não está retornando um booleano :(");

    $this->assertTrue($resultado, 'Sua função está retornando true, mas deveria retornar false');
  }

  public /*...content...*/
