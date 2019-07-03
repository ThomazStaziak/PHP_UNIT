<?php
    public function testFuncionario() : void {
        $funcionario = new Funcionario;
        
        $this->assertTrue($funcionario instanceof Pessoa, "A classe Funcionario não está herdando a classe Pessoa");
    }

    public function testEstudante() : void {
        $estudante = new Estudante();
        
        $this->assertTrue($estudante instanceof Pessoa, "A classe Estudante não está herdando a classe Pessoa");
    }

    public function testSalario(): void {
        $pessoa = new Funcionario;
        $props = get_object_vars($pessoa);
        
        $this->assertTrue(property_exists('Funcionario', 'salario'), "Está faltando a propriedade salario na classe Funcionario");
        
        $this->assertFalse(array_key_exists("salario", $props), "O salario de um funcionário deve ser privado");
    }

    public function testSetGetSalario() : void {
        $this->assertTrue(method_exists('Funcionario','setSalario'), "A classe Funcionario não tem um metódo setSalario");
        $this->assertTrue(method_exists('Funcionario','getSalario'), "A classe Funcionario não tem um metódo getSalario");
        
        $pessoa = new Funcionario;
        
        $pessoa->setSalario(500);
        
        $resul = $pessoa->getSalario();
        
        $this->assertTrue($resul === 500, "Os métodos getSalario e setSalario não estão funcionando corretamente");
    }

    public function testGraduado(): void {
        $pessoa = new Estudante();
        $props = get_object_vars($pessoa);
        
        $this->assertTrue(property_exists('Estudante', 'graduado'), "Está faltando a propriedade graduado na classe Funcionario");
        
        $this->assertFalse(array_key_exists("graduado", $props), "O atributo 'graduado' de um estudante deve ser privado");
    }

    public function testSetGetGraduado() : void {
        $this->assertTrue(method_exists('Estudante','terminarCurso'), "A classe Estudante não tem um metódo terminarCurso");
        $this->assertTrue(method_exists('Estudante','eGraduado'), "A classe Estudante não tem um metódo eGraduado");
        
        $pessoa = new Estudante();
        
        $this->assertTrue($pessoa->eGraduado() === false, "O valor do atributo graduado de um estudante por padrão deve ser false. Pode ter também um erro com o método eGraduado");
        
        $pessoa->terminarCurso();
        
        $resul = $pessoa->eGraduado();
        
        $this->assertTrue($resul === true, "Os métodos terminarCurso e eGraduado não estão funcionando corretamente");
    }

// Extra Code
class Pessoa {
  private $nome;
  private $sobrenome;
  private $email;
  
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