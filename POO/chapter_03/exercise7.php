<?php
    public function testPagavel(): void {
        $this->assertTrue(interface_exists("Pagavel"), "A interface Pagavel não existe");
        
        $interface = new ReflectionClass('Pagavel');
        
        $temPagar = false;
        
        foreach ($interface->getMethods() as $method) {
            if ($method->name == "pagar") {
                $temPagar = true;
            }
        }
        
        $this->assertTrue($temPagar, "O método pagar não está dentro da interface");
        
        $r = new ReflectionMethod("Pagavel", "pagar");
        
        $this->assertTrue(count($r->getParameters()) === 0, "O método pagar não deve receber parâmetro");
    }