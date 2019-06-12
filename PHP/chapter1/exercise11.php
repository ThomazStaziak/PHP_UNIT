<?php
    public function testResultado(): void {
 
        /*...content...*/

        $this->assertTrue(isset($soma) && $soma == 125, 'A variavel $soma não foi criada ou não contem o valor correto!');
        $this->assertTrue(isset($subtracao) && $subtracao === 75, 'A variavel $subtracao não foi criada ou não contem o valor correto!');
        $this->assertTrue(isset($multiplicacao) && $multiplicacao === 2500, 'A variavel $multiplicacao não foi criada ou não contem o valor correto!');
        $this->assertTrue(isset($divisao) && $divisao === 4, 'A variavel $divisao não foi criada ou não contem o valor correto!');
        $this->assertTrue(isset($resto) && $resto === 0, 'A variavel $resto não foi criada ou não contem o valor correto!');
    }