<?php
  public function testDescriptionExample(): void {
    $solucao = '/*...content...*/';

    function conta100Correto($numero) {
      $resultado = [];

      for ($i = $numero;  $i <= 100; $i++)
        array_push($resultado, $i);

      return $resultado;
    }

    $resultado1 = $this->conta100(98);
    $correto1 = conta100Correto(98);
    $this->assertTrue($resultado1 == $correto1, "Sua função não funcionou muito bem com o número 98");

    $resultado1 = $this->conta100(45);
    $correto1 = conta100Correto(45);
    $this->assertTrue($resultado1 == $correto1, "Sua função não funcionou muito bem com o número 45");

    $resultado1 = $this->conta100(5);
    $correto1 = conta100Correto(5);
    $this->assertTrue($resultado1 == $correto1, "Sua função não funcionou muito bem com o número 5");

    $contaFor = substr_count($solucao, "for");

    $this->assertTrue($contaFor == 0, "Não utilize o for para resolver o exercício, tenta resolver com o While :)");
  }

  private /*...content...*/
