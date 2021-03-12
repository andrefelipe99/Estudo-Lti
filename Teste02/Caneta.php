<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function Caneta($m, $c, $p){
        $this->cor = $c;
        $this->modelo = $m;
        $this->ponta = $p;
        $this->tampar();
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function rabiscar(){
        if($this->tampada)
            echo "<p>Erro! Caneta tampada<p>";
        else
        echo "<p>Estou Rabiscando<p>";
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){   
        $this->tampada = false;        
    }

}