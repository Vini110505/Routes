<?php




use Illuminate\Support\Facades\Route;




/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/




Route::get('/conta/{numero1}/{numero2}/{operacao?}', function (int $a, int $b, String $operacao = null ) {

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

});





Route::get('/hello/{nome}', function (String $nome) {

    if (strlen($nome) < 3){

     echo 'O nome deve conter pelo menos 3 caracteres';

    } else{

        echo 'Olá ' . $nome . '! Bem-Vindo ao meu site';

    }




})->where('nome', '[A-Za-z]+');