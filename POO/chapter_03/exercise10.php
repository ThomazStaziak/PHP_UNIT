<?php
    public function testFimDeMes(): void {
        $prov1 = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        $prov1->inserirPagamento(100);
        $prov1->inserirPagamento(200);
        
        $prov2 = new FornecedorExterno("Sara", "Sanchez", "sara@sara.com");
        
        $prov2->inserirPagamento(2000);
        $prov2->inserirPagamento(4000);
        $prov2->inserirPagamento(200);
        
        $emp1 = new Funcionario("Dario","Sus","dario@dh.com",500);
        
        $emp2 = new Funcionario("Ale","Viv","alejandro@dh.com", 600);
        
        $pagamentos = [$prov1, $prov2, $emp1, $emp2];
        
        $resuls = fimDeMes($pagamentos);
        
        $this->assertTrue(is_array($resuls), "A função não retorna um array!");
        
        $this->assertTrue(count($resuls) === 4, "A função não retorna a quantidade de elementos esperada no array");
        
        $funciona = $resuls[0] === 'O Juan Perez que você depositou R$ 300' && $resuls[1] === 'O Sara Sanchez que você depositou R$ 6200' && $resuls[2] === 'O Dario Sus que você depositou R$ 500' && $resuls[3] === 'O Ale Viv que você depositou R$ 600';
        
        $this->assertTrue($funciona, "La función no retorna los valores esperados");
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
function fimDeMes($pessoasPagaveis) {
  $resultados = [];
  
  // Escreva sua solução aqui...
  
  return $resultados;
}

