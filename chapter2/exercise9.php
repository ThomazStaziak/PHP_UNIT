<?php
  public function testDescriptionResultado(): void {
    $solucao = '/*...content...*/';

    function trocaCerta($array) {
      $resultado = [];

      foreach ($array as $key => $value) {
        $resultado[$value] = $key;
      }

      return $resultado;
    }

    $cantores = [
      "Gilberto" => "Gil",
      "Tim" => "Maia",
      "Luiz" => "Gonzaga"
    ];

    $resultado = $this->trocaValores($cantores);

    $this->assertTrue($resultado == trocaCerta($cantores), "Sua função não está funcionando como deveria :(");
  }

  private /*...content...*/
