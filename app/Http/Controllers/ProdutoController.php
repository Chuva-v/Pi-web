<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show($id)
    {
        $produto = Produto::findOrFail($id); // Busca o produto pelo ID
        return view('produto.show', compact('produto'));// Mostra a view
    }
}