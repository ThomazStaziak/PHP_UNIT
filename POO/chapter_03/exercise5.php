<?php
    public function testAbstrata(): void {
        $pessoa = new ReflectionClass('Pessoa');
        
        $this->assertTrue($pessoa->isAbstract(), "A classe Pessoa não é abstrata");
    }

// Extra Code 
class Pessoa {
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