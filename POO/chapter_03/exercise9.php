<?php
    public function testImplementa(): void {
        $prov = new FornecedorExterno("Juan", "Perez", "juan@perez.com");
        
        $this->assertTrue($prov instanceof Pagavel, "A classe FornecedorExterno não implementa Pagavel");
    }

    public function testPagar() : void {
        $prov = new ProveedorExterno("Juan", "Perez", "juan@perez.com");
        
        $prov->agregarPago(500);
        $prov->agregarPago(100);
        $prov->agregarPago(1000);
        
        $resul= $prov->pagar();
        
        $this->assertTrue(is_string($resul), "O valor de retorno do método deve ser uma string");
        
        $this->assertTrue(strtolower($resul) === "o juan perez que você depositou r$ 1600", " Era esperado 'A Juan Perez que você depositou R$ 1600' e foi recebido '$resul'");
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
class FornecedorExterno extends Pessoa {
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
  
  public function inserirPagamento($pagamento) {
    $this->pagamentos[] = $pagamento;
  }
  
  public function entrarNoPredio($identificacao) {
    $identificacao->verificar();
  }
}