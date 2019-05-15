<?php
  public function testDescriptionResultado(): void {
    $sol = '/*...content...*/';

    $array1 = [5,5,5,5,1];
    $sol1 = $this->racha($array1);

    $funciona = $sol1 == 4;

    $array2 = [1,1];
    $sol2 = $this->racha($array2);

    $funciona = $funciona && $sol2 == 0;

    $array3 = [5,5,5,5,5,5,5,5,5,5,1];
    $sol3 = $this->racha($array3);

    $funciona = $funciona && $sol3 == 10;

    $this->assertTrue($funciona, "La función no esta contando bien la racha...");

    $cantWhile = substr_count($sol, "while");

    $this->assertTrue($cantWhile > 0, "Parecería que no escribiste ningún while...");

    $cantFor = substr_count($sol, "for");

    $this->assertTrue($cantFor == 0, "No deberías utilizar el for en este ejercicio");
  }

  private /*...content...*/
