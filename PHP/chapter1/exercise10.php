<?php
    public function testResultado(): void {
        /*...content...*/
        $sol = '/*...content...*/';
        
        $this->assertTrue(isset($pessoa), 'A array $pessoa não foi criada');
        $this->assertTrue(count($pessoa) == 3, 'A array $pessoa não contem as 3 informações');
        
        $tNome = $pessoa[0];
        $tSobre = $pessoa[1];
        $tIdade = $pessoa[2];
        
        $this->assertTrue($nome == $tNome, 'A variavel $nome não contem o valor da array!');
        $this->assertTrue($sobrenome == $tSobre, 'A variavel $sobrenome não contem o valor da array!');
        $this->assertTrue($idade == $tIdade, 'A variavel $idade não contem o valor da array!');
    }