<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;


class ProdutosController extends Controller
{
    public function index(){
        //carrega todos os produtos da tabela
        $produtos = Produto::all();
        
        //carrega o produto do id dado
        // $p = Produto::find(3);
        //dd($p);

        // $categoria = Categoria::all();

        return view('listarProdutos',compact('produtos'));
    }



}
