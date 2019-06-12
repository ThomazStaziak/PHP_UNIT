<?php
    public function testResultado(): void {

        /*...content...*/
        $solucaoAluno = '/*...content...*/';
        
        $this->assertTrue(isset($first), 'A váriavel $first não está definida!');
        
        $haveEcho = strpos($solucaoAluno, 'echo $first');
        
        $this->assertTrue($haveEcho !== false, "Não foi feita a impressão do valor da váriavel usando o echo!");
    }