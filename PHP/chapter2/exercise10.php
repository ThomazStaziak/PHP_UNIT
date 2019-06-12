<?php
  public function testDescriptionResultado(): void {
    $solucao = '/*...content...*/';

    $cantores = [
      0 => [
        "nome" => "Luiz",
        "sobrenome" => "Gonzaga"
      ],
      1 => [
        "nome" => "Tim",
        "sobrenome" => "Maia"
      ],
      2 => [
        "nome" => "Gilberto",
        "sobrenome" => "Gil"
      ]
    ];

    $nomes = $this->preencheNome($cantores);

    $quantidade = count($nomes);
    $this->assertTrue($quantidade == 3, "A quantidade de nomes no array está incorreta...");

    $funcionando = true;
    for ($i=0; $i < count($nomes); $i++) {
      if ($nomes[$i] != $cantores[$i]["nome"]) {
        $funcionando = false;
        break;
      }
    }

    $this->assertTrue($funcionando, "A quantidade de nomes está correta, porém os nomes estão errados :(");

    $this->assertTrue(substr_count($solucao, "foreach") > 0, "Você precisa utilizar um foreach!");
    $this->assertTrue((substr_count($solucao, "for ") + substr_count($solucao, "for(")) == 0, "Parece que você tentou utilizar um for :(, tente utilizar um foreach :)");
  }

  private /*...content...*/
