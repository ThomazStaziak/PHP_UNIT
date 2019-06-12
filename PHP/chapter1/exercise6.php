<?php
    public function testResultado(): void { 
        /*...content...*/
        $solucaoAluno = '/*...content...*/';
        $this->assertTrue(isset($minhaArray), 'A váriavel $minhaArray não está definida!');
        $this->assertTrue(is_array($minhaArray), 'A váriavel $minhaArray não é um array!');
        $this->assertTrue(count($minhaArray) == 3, 'A array $minhaArray não contem 3 elementos!');
        

        $this->assertTrue(array_key_exists(15, $minhaArray), "Não existe a posição 15 dentro da array.");
        $this->assertTrue(is_int($minhaArray[15]), "Não existe a posição 15 dentro da array.");
            
        $this->assertTrue(array_key_exists(38, $minhaArray), "Não existe a posição 38 dentro da array.");
        $this->assertTrue(is_int($minhaArray[38]), "Não existe a posição 38 dentro da array.");
        
        $this->assertTrue(array_key_exists(87, $minhaArray), "Não existe a posição 87 dentro da array.");
        $this->assertTrue(is_int($minhaArray[87]), "Não existe a posição 87 dentro da array.");
        
        $definidoVacio = strpos($solucaoAluno, '[]');
        $condicionFinal = $definidoVacio !== false;
    }