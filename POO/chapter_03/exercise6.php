<?php
    public function testEntrarNoPredio(): void {
        $oRefl = new ReflectionClass ("Pessoa");
        
        $methods = $oRefl->getMethods();
        
        $temMetodo = false;
        
        foreach ($methods as $method) {
            if ($method->name === "entrarNoPredio") {
            $temMetodo = true;
            }
        }
        
        $this->assertTrue($temMetodo, "O método entrarNoPredio não existe");
        
        $r = new ReflectionMethod("Pessoa", "entrarNoPredio");
        
        $this->assertTrue($r->isAbstract(), "O método entrarNoPredio não é abstrato");
        
        $this->assertTrue(count($r->getParameters()) === 1, "O método entrarNoPredio deve receber um parâmetro");
    }

// Extra Code
abstract Pessoa {
  protected $nome;
  protected $sobrenome;
  protected $email;
  
  public function getNome() {
    return $this->nome;
  }
  
  public function setNome($nome) {
    $this->nome = $nome;
  }
  
  public function getSobrenome() {
    return $this->sobrenome;
  }
  
  public function setSobrenome($sobrenome) {
    $this->sobrenome = $sobrenome;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
}