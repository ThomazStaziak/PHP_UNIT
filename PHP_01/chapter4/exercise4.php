<?php
public function testThomaz(): void {
  $_POST = [
    "email" => "thomaz@digitalhouse.com",
    "usuario" => "thomazstaziak"
  ];

  $resultado = $this->bemVindo();
  $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
  $this->assertTrue(strtolower($resultado) == "bem-vindo thomazstaziak. foi registrado com o e-mail thomaz@digitalhouse.com", "O resultado está incorreto. Era esperado 'Bem-vindo thomazstaziak. Foi registrado com o e-mail thomaz@digitalhouse.com' e foi obtido '$resultado'");
}

public function testVictor(): void {
  $_POST = [
    "email" => "victor@digitalhouse.com",
    "usuario" => "victortorres"
  ];

  $resultado = $this->bemVindo();
  $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
  $this->assertTrue(strtolower($resultado) == "bem-vindo victortorres. foi registrado com o e-mail victor@digitalhouse.com", "O resultado está incorreto. Era esperado 'Bem-vindo victortorres. Foi registrado com o e-mail victor@digitalhouse.com' e foi obtido '$resultado'");
}

public /*...content...*/
