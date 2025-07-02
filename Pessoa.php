<?php 

class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($no, $id, $se) {
        $this->nome = $no;
        $this->idade = $id;
        $this->sexo = $se;
    }

    
    // Métodos públicos
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }
    // Métodos getters e setters
    public function getNome() {
        return $this->nome;
    }
    public function setNome($no) {
        $this->nome = $no;
    } 
    public function getIdade() {
        return $this->idade;
    } 
    public function setIdade($id) {
        $this->idade = $id;
    } 
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}