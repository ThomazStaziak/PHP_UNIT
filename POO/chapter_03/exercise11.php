<?php
    public function testQuantidadeEstudantes(): void {
        $classe = new ReflectionClass('Estudante');
        
        $temQuantidade = false;
        $eEstatica = false;
        
        foreach ($classe->getProperties() as $p) {
            if ($p->name == "quantidadeEstudantes") {
                $temQuantidade = true;
                $eEstatica = $p->isStatic();
            }
        }
        
        $this->assertTrue($temQuantidade, "O atributo 'quantidadeEstudantes' não existe");
        
        $this->assertTrue($eEstatica, "O atributo 'quantidadeEstudantes não é estatico'");
        
        $this->assertTrue(Estudante::$quantiadeEstudantes === 0, "O valor inicial de quantidades não é 0");
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

  class FornecedorExterno extends Pessoa implements Pagavel {
  private $pagamentos;
  
  public function __construct($nome, $sobrenome, $email) {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->email = $email;
    $this->pagamentos = [];
  }
  
  public function getPagamentos() {
    return $this->pagamentos;
  }
  
  public function agregarPagamento($pagamento) {
    $this->pagamentos[] = $pagamento;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  }
  
  public function pagar() {
    $nome = $this->nome;
    $sobrenome = $this->sobrenome;
    $salario = 0;
    
    foreach ($this->pagamentos as $pagamento) {
      $salario += $pagamento;
    }
     return "O $nome $sobrenome que você depositou R$ $salario";
  }
}

class Funcionario extends Pessoa implements Pagavel {
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
  
  public function pagar() {
     return "O " . $this->nome . " " . $this->sobrenome . " que você depositou R$ " . $this->salario; 
  }
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
class Estudante extends Pessoa {
  private $eGraduado = false;
  
  public function eGraduado() {
    return $this->eGraduado;
  }
  
  public function terminarCurso() {
    $this->eGraduado = true;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  } 
}   