<?php
  public function testDescriptionResultado(): void {
    function getResultado($array) {
        $resultado= [];

        foreach ($array as $value)
          if ($value % 2 == 0)
            array_push($resultado, $value);

        return $resultado;
    }

    $array1 = [1, 3, 5, 87, 133, 155];
    $correto1 = getResultado($array1);
    $resultado1 = $this->filtraArray($array1);

    $this->assertTrue($correto1 == $resultado1, "O filtro não está funcionando muito bem!");

    $array2 = [2, 5, 98, 97, 99];
    $correto2 = getResultado($array2);
    $resultado2 = $this->filtraArray($array2);

    $this->assertTrue($correto2 == $resultado2, "O filtro não está funcionando muito bem!");

    $array3 = [100, 200, 300, 400, 401, 403, 405];
    $correto3 = getResultado($array3);
    $resultado3 = $this->filtraArray($array3);

    $this->assertTrue($correto3 == $resultado3, "O filtro não está funcionando muito bem!");
  }

  private /*...content...*/
