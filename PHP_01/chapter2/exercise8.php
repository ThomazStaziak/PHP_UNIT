<?php
  public function testDescriptionResultado(): void {
    $solucao = '/*...content...*/';

    $array1 = ["primeiro" => 10, "segundo" => 20, "terceiro" => 30];
    $resultado1 = $this->somaAssoc($array1);

    $this->assertTrue($resultado1 == 60, "A soma de 10, 20 e 30 deveria ser 60");

    $array2 = ["primeiro" => 15, "segundo" => 10, "terceiro" => 5];
    $resultado2 = $this->somaAssoc($array2);

    $this->assertTrue($resultado2 == 30, "A soma de 15, 10 e 5 deveria ser 30");

    $array3 = ["primeiro" => 4, "segundo" => 8, "terceiro" => 15];
    $resultado3 = $this->somaAssoc($array3);

    $this->assertTrue($resultado3 == 27, "A soma de 4, 8 e 15 deveria ser 27");

    $contaForeach = substr_count($solucao, "foreach");

    $this->assertTrue($contaForeach > 0, "Parece que você não utilizou nenhum foreach!");
  }

  private /*...content...*/
