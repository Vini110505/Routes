<?php

namespace App\Http\Controllers;


class ContaController extends Controller{

    public function operacao( int $a, int $b, String $operacao = null) {
        switch($operacao){
            case '':
                $soma = $a + $b;
                $subtracao = $a - $b;
                $multiplicacao = $a * $b;
                $divisao = $a / $b;
                echo 'Soma:' . $soma . '<br>'
                . 'Subtração:' . $subtracao . '<br>'
                . 'Multiplicação:' . $multiplicacao . '<br>'
                . 'Divisação:' . $divisao . '<br>';
                break;
        
            case 'soma':
                $soma = $a + $b;
        
                echo 'Soma:' . $soma;
        
                break;
            case 'subtracao':
        
                $subtracao = $a - $b;
                echo 'Subtração:' . $subtracao;
        
                break;
        
            case 'multiplicacao':
                $multiplicacao = $a * $b;
        
                echo 'Multiplicação:' . $multiplicacao;
                break;
        
            case 'divisao':
                $divisao = $a / $b;
        
                echo 'Divisação:' . $divisao;
                break;
            default:
                echo 'Operação inválida';
        
         }
    }
    

    
}