<?php
    public function testResultado(): void {
        /*...content...*/
        $solucaoAluno = '/*...content...*/';
        
        $this->assertTrue(isset($texto), 'A váriavel $texto não está definida!');
        
        $this->assertTrue(gettype($texto) == "string", 'A váriavel $texto deve ser um texto!');
        
        $hayVD = strPos($solucaoAluno, 'var_dump($texto)');
        
        $this->assertTrue($hayVD !== false, "Não foi feita a impressão do valor da váriavel usando o var_dump()!");
    }