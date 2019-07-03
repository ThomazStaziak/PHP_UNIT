<?php
    public function testNome(): void {
        $pessoa = new Pessoa();
        $props = get_object_vars($pessoa);
        
        $this->assertTrue(property_exists('pessoa', 'nome'), "Falta a propriedade nome");
        
        $this->assertFalse(array_key_exists("nome", $props), "O nome deve ser privado");
    }

    public function testSetGetNome() : void {
        $this->assertTrue(method_exists('pessoa','setNome'), "A classe não possui  método setNome");
        $this->assertTrue(method_exists('pessoa','getNome'), "A classe não possui  método getNome");
        
        $pessoa = new Pessoa();
        
        $pessoa->setNome("Ale");
        
        $resul = $pessoa->getNome();
        
        $this->assertTrue($resul === "Ale", "Os métodos getNome e setNome não funcionam corretamente");
    }

    public function testSobrenome(): void {
        $pessoa = new Pessoa();
        $props = get_object_vars($pessoa);
        
        $this->assertTrue(property_exists('pessoa', 'sobrenome'), "Está faltando a propriedade sobrenome");
        
        $this->assertFalse(array_key_exists("sobrenome", $props), "O sobrenome deve ser privado");
    }

    public function testSetGetSobrenome() : void {
        $this->assertTrue(method_exists('pessoa','setSobrenome'), "A classe não possui  método setSobrenome");
        $this->assertTrue(method_exists('pessoa','getSobrenome'), "A classe não possui  método getSobrenome");
        
        $pessoa = new Pessoa();
        
        $pessoa->setSobrenome("Viv");
        
        $resul = $pessoa->getSobrenome();
        
        $this->assertTrue($resul === "Viv", "Os métodos getSobrenome e setSobrenome não funcionam corretamente");
    }

    public function testEmail(): void {
        $pessoa = new Pessoa();
        $props = get_object_vars($pessoa);
        
        $this->assertTrue(property_exists('pessoa', 'email'), "Está faltando a propriedade email");
        
        $this->assertFalse(array_key_exists("email", $props), "O email deve ser privado");
    }

    public function testSetGetEmail() : void {
        $this->assertTrue(method_exists('pessoa','setEmail'), "A classe não possui  método setEmail");
        $this->assertTrue(method_exists('pessoa','getEmail'), "A classe não possui  método getEmail");
        
        $pessoa = new Pessoa();
        
        $pessoa->setEmail("ale@digitalhouse.com");
        
        $resul = $pessoa->getEmail();
        
        $this->assertTrue($resul === "ale@digitalhouse.com", "Os métodos getEmail e setEmail não funcionam corretamente");
    }