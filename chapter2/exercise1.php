<?php
  public function testResultado(): void {
    $solucao = '/*...content...*/';

    $resultados = $this->loop();

    $this->assertTrue(count($resultados) === 10, 'Seu array não tem 11 elementos');

    $numeros = true;

    for ($i = 0; $i < 11; $i++) {
      if ($resultados[$i] != $i) {
        $numeros = false;
        break;
      }
    }

    $this->assertTrue($numeros, "O array não tem números de 0 a 10");

    $contadorFor = substr_count($solucao, "for");

    $this->assertTrue($contadorFor > 0, "Parece que você não utilizou nenhum for :(, tente resolver utilizando pelo menos um for!");

    $contador9 = substr_count($solucao, "9");

    $this->assertTrue($cant9 == 0, "Não preencha seu array manualmente...");
  }

  private /*...content...*/
