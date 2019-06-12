<?php
    public function testResultado(): void {
        /*...content...*/
        $solucaoAluno = '/*...content...*/';
        $this->assertTrue(isset($minhaArray), 'A variavel $minhaArray não está definida!');
        $this->assertTrue(is_array($minhaArray), 'A variavel $minhaArray não é um array');
        $this->assertTrue(count($minhaArray) == 3, 'A Array deve ter 3 elementos');
        
        $tipos = ["string", "double", "boolean"];
        $i = 0;
        foreach ($minhaArray as $value) {
            $this->assertTrue(gettype($value) == $tipos[$i], "A posição $value da Array não é do tipo " . $tipos[$i]);
            $i++;
        }
    }