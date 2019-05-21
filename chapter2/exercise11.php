<?php
  public function testDescriptionResultado(): void {
    $solucao = '/*...content...*/';

    $this->assertTrue(substr_count($solucao, "var_dump") > 0, "Está faltando o var_dump()!!!");

    $bug = [
      "primeiro" => 'Oops! Você me descobriu!',
      "segundo" => "Eu sou um array ;)"
    ];

    $this->debug($bug);
    $this->assertTrue(false, "Parece que você não utilizou nenhum exit :(");
  }

  /*...content...*/
