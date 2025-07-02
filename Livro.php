<?php
 
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $paginaAtual;    
    private $aberto;
    private $leitor;


    public function detalhes() {
        echo"<hr>O livro " . $this->getTitulo() . " escrito por " . $this->getAutor() . ", com " . $this->getDetalhes() . " páginas.";
        echo "Lido por " . $this->getLeitor()->getNome() . ", que está na página " . $this->getpaginaAtual() . ".";
    }

    // Construtor
    public function __construct($t, $a, $tp, $le) {
        $this->titulo = $t;
        $this->autor = $a;
        $this->totPaginas = $tp;
        $this->paginaAtual = 0;
        $this->aberto = false;        
        $this->leitor = $le;
    }
    
       // Métodos públicos
       public function getTitulo() {
        return $this->titulo;   
       }

       public function getAutor() {
        return $this->autor;   
       }

       public function getDetalhes() {
        return $this->totPaginas;
       }
       public function getpaginaAtual() {
        return $this->paginaAtual;
       }

       public function getAberto() {
        return $this->aberto;
       }
       public function getLeitor() {
        return $this->leitor;
       }

       public function setTitulo($t) {
        $this->titulo = $t;   
       }

        public function setAutor($a) {
          $this->autor = $a;   
        }
         public function setDetalhes($tp) {
          $this->totPaginas = $tp;   
        }
            public function setpaginaAtual($pa) {
            $this->paginaAtual = $pa;   
        }

         public function setAberto($ab) {
          $this->aberto = $ab;   
        }

         public function setLeitor($le) {
            $this->leitor = $le;   
        }

        // Implementação dos métodos da interface Publicacao
    public function abrir() {
        $this->aberto = true;    
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($p) {
        if ($p > $this->totPaginas) {
            $this->paginaAtual = 0; // Se a página for maior que o total, volta para a primeira
        } else {
            $this->paginaAtual = $p; // Caso contrário, define a página atual
        }
    }

    public function avancarPag() {
         $this->paginaAtual++;
        }

    public function voltarPag() {
        $this->paginaAtual--;
    }
           
}