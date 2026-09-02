<?php

use Illuminate\Support\Facades\Route;


// 1. Rota /sobre
Route::get('/sobre', function () {
    return view('sobre');
});


// 2. Rota /aluno/{nome}
// Aceita nomes com letras
Route::get('/aluno/{nome}', function ($nome) {
    return view('aluno', compact('nome'));
})->where('nome', '[A-Za-zÀ-ÿ]+');


// 3. Rota /aluno/{id}
// Aceita somente números
Route::get('/aluno/{id}', function ($id) {
    return view('aluno', ['id' => $id]);
})->where('id', '[0-9]+');


// 4. Rota com 2 parâmetros
Route::get('/curso/{curso}/aluno/{aluno}', function ($curso, $aluno) {
    return view('curso', compact('curso', 'aluno'));
});


// 5. Lista de usuários
Route::get('/usuarios', function () {

    $usuarios = [
        'João',
        'Maria',
        'Carlos',
        'Ana',
        'Pedro',
        'Lucas',
        'Mariana',
        'Gabriel',
        'Julia',
        'Rafael'
    ];

    return view('usuarios', compact('usuarios'));
});


// 6. Usuários com nome e idade
Route::get('/usuarios-idade', function () {

    $usuarios = [
        ['nome' => 'João', 'idade' => 17],
        ['nome' => 'Maria', 'idade' => 20],
        ['nome' => 'Carlos', 'idade' => 18],
        ['nome' => 'Ana', 'idade' => 16],
        ['nome' => 'Pedro', 'idade' => 22],
        ['nome' => 'Lucas', 'idade' => 15],
        ['nome' => 'Julia', 'idade' => 19],
        ['nome' => 'Rafael', 'idade' => 17],
        ['nome' => 'Mariana', 'idade' => 21],
        ['nome' => 'Gabriel', 'idade' => 18]
    ];

    return view('usuarios', compact('usuarios'));
});


// 7. Parâmetro opcional
Route::get('/saudacao/{nome?}', function ($nome = null) {

    if ($nome) {
        $mensagem = "Olá, $nome!";
    } else {
        $mensagem = "Olá, visitante!";
    }

    return view('saudacao', compact('mensagem'));
});


// 8. Enviando dados para a View
Route::get('/produto', function () {

    $nome = 'Notebook';
    $preco = 3500;
    $categoria = 'Informática';

    return view('produto', compact('nome', 'preco', 'categoria'));
});


// 9. Lista de produtos
Route::get('/produtos', function () {

    $produtos = [
        ['nome' => 'Notebook', 'preco' => 3500, 'estoque' => 5],
        ['nome' => 'Mouse', 'preco' => 80, 'estoque' => 10],
        ['nome' => 'Teclado', 'preco' => 150, 'estoque' => 0],
        ['nome' => 'Monitor', 'preco' => 1200, 'estoque' => 3],
        ['nome' => 'Headset', 'preco' => 250, 'estoque' => 0],
        ['nome' => 'Webcam', 'preco' => 300, 'estoque' => 7],
        ['nome' => 'Impressora', 'preco' => 900, 'estoque' => 2],
        ['nome' => 'Pen Drive', 'preco' => 50, 'estoque' => 20],
        ['nome' => 'HD Externo', 'preco' => 450, 'estoque' => 4],
        ['nome' => 'Caixa de Som', 'preco' => 200, 'estoque' => 0]
    ];

    return view('produtos', compact('produtos'));
});


// 10. Nota com condição
Route::get('/nota/{nota}', function ($nota) {
    return view('nota', compact('nota'));
})->where('nota', '[0-9]+');


// 11. Sistema de produtos
Route::get('/produtos-sistema', function () {

    $produtos = [
        ['id' => 1, 'nome' => 'Notebook', 'preco' => 3500, 'estoque' => 5],
        ['id' => 2, 'nome' => 'Mouse', 'preco' => 80, 'estoque' => 10],
        ['id' => 3, 'nome' => 'Teclado', 'preco' => 150, 'estoque' => 0],
        ['id' => 4, 'nome' => 'Monitor', 'preco' => 1200, 'estoque' => 3],
        ['id' => 5, 'nome' => 'Headset', 'preco' => 250, 'estoque' => 0]
    ];

    return view('produtos-sistema', compact('produtos'));
});


// Detalhes do produto
Route::get('/produto/{id}', function ($id) {
    return view('produto-detalhes', compact('id'));
})->where('id', '[0-9]+')->name('produto.detalhes');