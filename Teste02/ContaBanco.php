<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function ContaBanco(/*$numConta, $tipo, $dono, $saldo, $status*/)
    {
        #$this->numConta = $numConta;
        #$this->tipo = $tipo;
        #$this->dono = $dono;
        $this->setSaldo(0);
        $this->setStatus(false);
    }


    public function getNumConta()
    {
        return $this->numConta;
    }


    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC")
            $this->saldo = 50;
        else if($tipo == "CP"){
            $this->saldo =  150;
        }
        
    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            print "<p>Conta com dinheiro</p>";
        }
        else if($this->getSaldo() < 0){
            print "<p>Conta com débito</p>";
        }else
            $this->setStatus(false);
    }

    public function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valor);
        }else
            print "<p>Conta fechada.</p>";
    }

    public function sacar($valor){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
            } else{
                echo "<p>Saldo Insuficiente</p>";
            } 
        } else {
            echo "<p>Impossível Sacar</p>";
        }
    }

    public function pagarMensalidade(){
        if($this->getTipo() == "CC"){
            $valor = 12;
        }
        else if($this->getTipo() == "CP"){
            $valor = 20;
        }
        if($this->getStatus()){
            if($this->getSaldo()){
                $this->setSaldo($this->getSaldo - $valor);
            } else{
                echo "<p>Saldo Insuficiente</p>";
            }
        }
        else{
            echo "<p>Impossível pagar</p>";
        }
    }

}