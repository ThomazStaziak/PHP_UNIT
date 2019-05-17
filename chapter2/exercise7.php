<?php
  public function testDescriptionResultado(): void {
    $solucao = '/*...content...*/';

    $array1 = [5,5,5,5,1];
    $resultado1 = $this->numeroDaSorte($array1);

    $this->assertTrue($resultado1 == 4, "Sua função não está funcionando muito bem :(");

    $array2 = [5,5,4,5,6];
    $resultado2 = $this->numeroDaSorte($array2);

    $this->assertTrue($resultado2 == 2, "Sua função não está funcionando muito bem :(");

    $contaWhile = substr_count($solucao, "while");

    $this->assertTrue($contaWhile > 0, "Você não utlizou nenhum while!");

    $contaFor = substr_count($solucao, "for");

    $this->assertTrue($contaFor == 0, "Não utilize for para resolver esse exercício!");
  }

  private /*...content...*/
