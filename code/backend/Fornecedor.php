<?php

class Fornecedor extends Cliente{

    private $nome_da_entidade;
    private $servicos;
    private $descricao;
    private $local_da_sede;
    private $zona_de_atividades;

    /*********Construtores****************/

    function __construct($email,
                         $password,
                         $nome_completo,
                         $telemovel,
                         $nome_da_entidade,
                         $servicos,
                         $descricao,
                         $local_da_sede,
                         $zona_de_atividade) {

        parent::__construct($email,$password,$nome_completo,$telemovel);

        $this->nome_da_entidade  = $nome_da_entidade;
        $this->servicos          = $servicos;
        $this->descricao         = $descricao;
        $this->local_da_sede     = $local_da_sede;
        $this->zona_de_atividade = $zona_de_atividade;
        $this->nome_completo     = $nome_completo;
    }

    /***************Getters****************/

    public function getEmail() {
        return parent::getEmail();
    }

    public function getTelemovel() {
        return parent::getTelemovel();
    }

    public function getPassword() {
        return parent::getPassword();
    }

    public function getNome_completo() {
        return parent::getNome_completo();
    }

    public function getNome_da_entidade() {
        return $this->nome_da_entidade;
    }

    public function getServicos() {
        return $this->servicos;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getLocal_da_sede() {
        return $this->local_da_sede;
    }

    public function getZona_de_atividade() {
        return $this->zona_de_atividade;
    }

    /***************Setters****************/

    public function setEmail($value) {
        parent::setEmail($value);
    }

    public function setTelemovel($value) {
        parent::setTelemovel($value);
    }

    public function setPassword($value) {
        parent::setPassword($value);
    }

    public function setNome_completo($value) {
        $this->nome_completo = $value;
    }

    public function setNome_da_entidade($value) {
        $this->nome_da_entidade = $value;
    }

    public function setServicos($value) {
        $this->servicos = $value;
    }

    public function setDescricao($value) {
        $this->descricao = $value;
    }

    public function setLocal_da_sede($value) {
        $this->local_da_sede = $value;
    }

    public function setZona_de_atividade($value) {
        $this->zona_de_atividade = $value;
    }

    /*******Funcoes*******/

    public function faz_servico($servico) {
        return in_array($servico, $this->servicos);
    }

}

/*****Testes*****/

//fornecedor
$fornecedor1 = new Fornecedor('ola1@gmail.com',
    'ola1',
    'nome1',
    91,
    'entidade1',
    array('servico1','servico2','servico3'),
    'descricao do que faco 1',
    'local 1',
    'zona 1');

print("\nFornecedor 1\n");
print("---------\n");
print('mail:      ' . $fornecedor1->getEmail()             . "\n");
print('password:  ' . $fornecedor1->getPassword()          . "\n");
print('nome:      ' . $fornecedor1->getNome_completo()     . "\n");
print('telemovel: ' . $fornecedor1->getTelemovel()         . "\n");
print('entidade:  ' . $fornecedor1->getNome_da_entidade()  . "\n");
print('servicos:  ' . $fornecedor1->getServicos()          . "\n");
print('descricao: ' . $fornecedor1->getDescricao()         . "\n");
print('local:     ' . $fornecedor1->getLocal_da_sede()     . "\n");
print('zona:      ' . $fornecedor1->getZona_de_atividade() . "\n");
print("____________________________\n");
print('fornecedor1 contem servico1?  ' . $fornecedor1->faz_servico('servico1')  . "\n");
print('fornecedor1 contem servico90? ' . $fornecedor1->faz_servico('servico90') . "\n");

?>
