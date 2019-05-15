<?php
  public function testResultado(): void {
    $solucao = '/*...content...*/';

    $resultados = $this->loop();

    $this->assertTrue(count($resultados) === 6, 'O array não tem 6 elementos');

    $numeros = true;
    foreach ($resultados as $key => $value) {
      if ($key + 5 != $value) {
        $numeros = false;
        break;
      }
    }

    $this->assertTrue($numeros, "O array não contém números de 5 a 10");

    $contaFors = substr_count($solucao, "for");

    $this->assertTrue($contaFors > 0, "Parece que você não utilizou nenhum for :(, tente resolver utilizando pelo menos um for!");

    $conta9 = substr_count($solucao, "9");

    $this->assertTrue($conta9 == 0, "Não escreva os números manualmente, tente utilizar um for!");
  }

  private /*...content...*/
