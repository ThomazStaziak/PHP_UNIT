<?php
    public function testResultado(): void {
        /*...content...*/
        
        
        
        $this->assertTrue(isset($batman), 'A Variavel $batman não está definida!');
        $this->assertTrue(is_array($batman), 'A Variavel $batman não é um array!');

        
        $this->assertTrue(count($batman) == 5, 'A Variavel $batman não contem 5 itens!');
        
        $this->assertTrue(array_key_exists("nome",$batman), 'A Array $batman não contem a associação nome!');
        $this->assertTrue(array_key_exists("sobrenome",$batman), 'A Array $batman não contem a associação sobrenome!');
        $this->assertTrue(array_key_exists("peso",$batman), 'A Array $batman não contem a associação peso!');
        $this->assertTrue(array_key_exists("altura",$batman), 'A Array $batman não contem a associação altura!');
        $this->assertTrue(array_key_exists("batcinto",$batman), 'A Array $batman não contem a associação batcinto!');
        
        $cinturon = $batman["batcinto"];
        $altura = $batman["altura"];
        $peso = $batman["peso"];
        $apellido = $batman["sobrenome"];
        $nombre = $batman["nome"];
        
        $nombreCorrecto = is_string($nombre) == "Bruce";
        
        $this->assertTrue($nombreCorrecto, 'O nome do Batman não está correto ou não está na posição "nome".');
        
        $apellidoCorrecto = is_string($apellido) == "Wayne";
        
        $this->assertTrue($apellidoCorrecto, 'O sobrenome do Batman não está correto ou não está na posição "sobrenome".');
        
        $pesoCorrecto = is_int($peso) && $peso == 95;
        
        $this->assertTrue($pesoCorrecto, 'O peso do Batman não está correto ou não está na posição "peso".');
        
        $alturaCorrecta = is_double($altura) && $altura == 1.88;
        
        
        $this->assertTrue($alturaCorrecta, 'O altura do Batman não está correto ou não está na posição "altura".');
        
        
        $this->assertTrue(is_array($cinturon), 'O batcinto não é um array!');
        
        $this->assertTrue(count($cinturon) == 2, 'O batcinto não contem 2 itens.');
        
        $bruceCorda = array_pop($cinturon);
        $bruceLanterna = array_pop($cinturon);
        
        
        
        $linternaCorrecta = is_string($bruceLanterna) == "batlanterna";
        
        $this->assertTrue($linternaCorrecta, 'A batlanterna não parece está correta ou não está na primeira posição');
        
        $lazoCorrecto = is_string($bruceCorda) == "batcorda";
        
        $this->assertTrue($lazoCorrecto, 'A batlanterna não parece está correta ou não está na segunda posição'); 
    }