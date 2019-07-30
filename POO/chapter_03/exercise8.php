<?php
    public function testImplementa(): void {
        $funcionario = new Funcionario("Dario", "Sus", "dario@dh.com", 500);
        
        $this->assertTrue($funcionario instanceof Pagavel, "A classe Funcionario não implementa a interface Pagavel");
    }

    public function testPagar() : void {
        $funcionario = new Funcionario("Dario", "Sus", "dario@dh.com", 500);
        
        $resul= $funcionario->pagar();
        
        $this->assertTrue(is_string($resul), "O valor de retorno do método pagar deve ser uma string");
        
        $this->assertTrue(strtolower($resul) === "o dario sus que você depositou r$ 500", "Era esperado 'o dario sus que você depositou r$ 500' e foi recebido '$resul'");
    }

// Extra Code
interface Pagavel {
  public function pagar();
}

abstract Pessoa {
  protected $nome;
  protected $sobrenome;
  protected $email;

  public function __construct($nome, $sobrenome, $email) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
  }
  
  public abstract function entrarNoPredio($i);
  
  public function getNome() {
    return $this->nome;
  }
  
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
  
  public function __construct($nome, $sobrenome, $email, $salario) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->salario = $salario;
  }
  
  public function getSalario() {
    return $this->salario;
  }
  
  public function setSalario($salario) {
    $this->salario = $salario;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  }
}