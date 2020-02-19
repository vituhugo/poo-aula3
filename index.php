<?php

require 'ContaCorrente.php';

$conta = new ContaCorrente(1000);

$conta->sacar(1001);
// $conta->depositar(100);
// echo "Saldo = ". $conta->consultarSaldo();
// var_dump($conta);
die;