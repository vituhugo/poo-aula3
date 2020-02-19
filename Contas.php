<?php
abstract class Contas {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }
    
    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "É impossível sacar.";
            die;
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}