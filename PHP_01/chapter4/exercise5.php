<?php
  public function testThomaz(): void {
    $_POST = [
      "email" => "thomaz@digitalhouse.com",
      "usuario" => "thomazstaziak"
    ];

    $resultado = $this->bemVindo();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "bem-vindo thomazstaziak. foi registrado com o email thomaz@digitalhouse.com", "O resultado está incorreto. Era esperado 'bem-vindo thomaz. foi registrado com o email thomaz@digitalhouse.com' e foi obtido '$resultado'");
  }

  public function testVictor(): void {
    $_POST = [
      "email" => "victor@digitalhouse.com",
    ];

    $resultado = $this->bemVindo();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "e-mail de boas vindas", "O resultado está incorreto. Era esperado 'e-mail de boas vindas' e foi obtido '$resultado'");
  }

  public /*...content...*/
