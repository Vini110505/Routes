<?php

namespace App\Http\Controllers;


class ContaController extends Controller{

    public function soma(int $a, int $b, String $operacao = null) {
        $resultado = $a + $b;
        echo 'Soma: ' . $resultado;
    }
    public function subtracao(int $a, int $b, String $operacao = null) {
        $resultado = $a - $b;
        echo 'Subtração: ' . $resultado;
    }
    public function multiplicacao(int $a, int $b, String $operacao = null) {
        $resultado = $a * $b;
        echo 'Multiplicação: ' . $resultado;
    }
    public function divisao(int $a, int $b, String $operacao = null) {
        $resultado = $a / $b;
        echo 'Divisão: ' . $resultado;
    }
    
    public function todos(int $a, int $b, String $operacao = null) {
        $soma = $a + $b;
        $subtracao = $a - $b;
        $divisao = $a / $b;
        $multiplicacao = $a * $b;
        echo 'Soma: ' . $soma . '<br>';
        echo 'Subtração: ' . $subtracao . '<br>';
        echo 'Multiplicação: ' . $multiplicacao . '<br>';
        echo 'Divisão: ' . $divisao . '<br>';
    }
    

    
}