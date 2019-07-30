<?php
    public function testFuncionario(): void {
        $empregado = new Funcionario("Dario", "Sus", "dario@dh.com", 500);
        
        $nome = $empregado->getNome();
        
        $sobrenome = $empregado->getSobrenome();
        
        $email = $empregado->getEmail();
        
        $salario = $empregado->getSalario();
        
        $this->assertTrue($nome === "Dario", "O construtor não está atribuindo o nombre");
        
        $this->assertTrue($sobrenome === "Sus", "O construtor não está atribuindo o sobrenome");
        
        $this->assertTrue($email === "dario@dh.com", "O construtor não está atribuindo o email");
        
        $this->assertTrue($salario === 500, "O construtor não está atribuindo o salario");
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

// Default Code
class Funcionario extends Pessoa {
  private $salario;
  
  public function getSalario() {
    return $this->salario;
  }
  
  public function setSalario($salario) {
    $this->salario = $salario;
  }
}