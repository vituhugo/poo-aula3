<?php require('Contas.php');

class ContaCorrente extends Contas {
    protected $chequeEspecial = 200;

    // public function __construct($saldo) {
    //     parent::__construct($saldo);
    // }

    public function depositarCheque() {

    }

    public function sacar($valor) {
        // Quando o meu saldo for 0 ai eu acesso o limite.

        $saldoComLimite = $this->saldo + $this->chequeEspecial;
        if ($saldoComLimite >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "É impossível sacar.";
            die;
        }

        // echo "Saldo Atual:", $this->saldo, "\n";
        // echo "Valor de Saque:", $valor, "\n";
        // $this->saldo -= $valor;
        // echo "Saldo Subtraido:", $this->saldo, "\n";
        // echo "Valor Cheque Especial:", $this->chequeEspecial, "\n";
        // echo "Saldo Subtraido >= -ChequeEspecial:"; 
        // var_dump($this->saldo >= (-1 * $this->chequeEspecial));
        // if ($this->saldo >= (-1 * $this->chequeEspecial)) {
        //     echo "Pode";
        // } else {
        //     echo "Não pode. Tá bem?";
        // }
    }
}