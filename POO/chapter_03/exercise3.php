<?php
    public function testNome(): void {
        $pessoa = new Pessoa();
        
        $this->assertTrue(property_exists('Pessoa', 'nome'), "Falta a propriedade nome");
        
        $reflect = new ReflectionClass($pessoa);

        $props = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
        
        $temNome = false;
        
        foreach ($props as $prop) {
            if ($prop->name == "nome") {
            $temNome = true;
            }
        }
        
        $this->assertTrue($temNome, "O atributo nome não é protegido");
    }

    public function testSetGetNome() : void {
        $this->assertTrue(method_exists('Pessoa','setNome'), "A classe Pessoa não possui um método setnome");
        $this->assertTrue(method_exists('Pessoa','getNome'), "A classe Pessoa não possui um método getnome");
        
        $pessoa = new Pessoa();
        
        $pessoa->setNome("Ale");
        
        $resul = $pessoa->getNome();
        
        $this->assertTrue($resul === "Ale", "Los métodos getNome y setNome tienen un error");
    }

    public function testSobrenome(): void {
        $pessoa = new Pessoa();
        
        $this->assertTrue(property_exists('Pessoa', 'apellido'), "Falta la propiedad apellido");
        
        $reflect = new ReflectionClass($pessoa);

        $props = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
        
        $temSobrenome = false;
        
        foreach ($props as $prop) {
            if ($prop->name == "sobrenome") {
            $temSobrenome = true;
            }
        }
    
         $this->assertTrue($temSobrenome, "O atributo sobrenome não é protegido");
    }

    public function testSetGetSobrenome() : void {
        $this->assertTrue(method_exists('Pessoa','setSobrenome'), "A classe Pessoa não possui um método setSobrenome");
        $this->assertTrue(method_exists('Pessoa','getSobrenome'), "A classe Pessoa não possui um método getSobrenome");
        
        $pessoa = new Pessoa();
        
        $pessoa->setSobrenome("Viv");
        
        $resul = $pessoa->getSobrenome();
        
        $this->assertTrue($resul === "Viv", "Os métodos getSobrenome e setSobrenome não funcionam corretamente");
    }

    public function testEmail(): void {
        $pessoa = new Pessoa();
        
        $this->assertTrue(property_exists('Pessoa', 'email'), "A classe Pessoa não tem a propriedade email");
        
        $reflect = new ReflectionClass($pessoa);

        $props = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
        
        $temEmail = false;
        
        foreach ($props as $prop) {
            if ($prop->name == "email") {
            $temEmail = true;
            }
        }
        
        $this->assertTrue($temEmail, "O atributo email não é protegido");
    }

    public function testSetGetEmail() : void {
        $this->assertTrue(method_exists('Pessoa','setEmail'), "A classe Pessoa não possui um método setEmail");
        $this->assertTrue(method_exists('Pessoa','getEmail'), "A classe Pessoa não possui um método getEmail");
        
        $pessoa = new Pessoa();
        
        $pessoa->setEmail("ale@digitalhouse.com");
        
        $resul = $pessoa->getEmail();
        
        $this->assertTrue($resul === "ale@digitalhouse.com", "Os métodos getEmail e setEmail não funcionam corretamente");
    }

    