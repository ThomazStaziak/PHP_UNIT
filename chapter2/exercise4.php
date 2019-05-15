<?php
  public function testResultado(): void {
    $solucao = '/*...content...*/';

    $array1 = [10, 20, 30];
    $resultado1 = $this->somaArray($array1);

    $this->assertTrue($resultado1 == 60, "A soma de 10, 20 e 30 devería ser 60");

    $array2 = [15, 10, 5];
    $resultado2 = $this->somaArray($array2);

    $this->assertTrue($resultado2 == 30, "A soma de 15, 10 e 5 devería ser 30");

    $array3 = [4, 8, 15];
    $resultado3 = $this->somaArray($array3);

    $this->assertTrue($resultado3 == 27, "A soma de 4, 8 e 15 devería ser 27");

    $contaFor = substr_count($solucao, "for");

    $this->assertTrue($contaFor > 0, "Parecería que no escribiste ningún for...");
  }

  private /*...content...*/
