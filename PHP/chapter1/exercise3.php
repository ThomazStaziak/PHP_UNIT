<?php
    public function testResultado(): void {
        /*...content...*/
        $solucaoAluno = '/*...content...*/';
        
        $vars = get_defined_vars();
        $estaNulo = array_key_exists("$nulo", $vars);
        
        $this->assertTrue(isset($texto), 'A váriavel $texto não está definida.');
        $this->assertTrue(isset($numeroInteiro), 'A váriavel $numeroInteiro não está definida.');
        $this->assertTrue(isset($numeroDecimal), 'A váriavel $numeroDecimal não está definida.');
        $this->assertTrue(isset($verdade), 'A váriavel $verdade não está definida.');
        $this->assertTrue(isset($estaNulo), 'A váriavel $nulo não está definida.');
        
        $this->assertTrue(gettype($texto) == "string", 'A váriavel $texto deve ser um tipo String');
        $this->assertTrue(gettype($numeroInteiro) == "integer", 'A váriavel $numeroInteiro deve ser um tipo Inteiro');
        $this->assertTrue(gettype($numeroDecimal) == "double", 'A váriavel $numeroDecimal deve ser um tipo Decimal');
        $this->assertTrue(gettype($verdade) == "boolean", 'A váriavel $verdade deve ser um tipo Boolean');
        $this->assertTrue(is_null($nulo), 'A váriavel $nulo deve ser um tipo null');
    }