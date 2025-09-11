<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produto;
use Illuminate\Support\Str;

class Show extends Component
{
    public $id;
    public function mount(){
        $this->id=request()->route('id');
    }
 
    public function render(){
        $produtos = Produto::all();
        $produto = Produto::findOrFail($this->id);

        $frutas = $produtos->filter(function($itens){
            if(Str::contains($produto->name, ['Açaí Copo','Açaí'])){
                return Str::contains($itens->descricao,'fruta')
            }
        })
        $vitaminas = $produtos->filter(function($itens){
            if(Str::contains($produto->name, 'Vitamina de Açaí')){
                return Str::contains($itens->descricao,'vitamina')
            }
        })
        $caldas = $produtos->filter(function($itens){
            if(Str::contains($produto->name, ['Açaí Copo','Açaí'])){
                return Str::contains($itens->descricao,'calda')
            }
        })
        $cremes = $produtos->filter(function($itens){
            if(Str::contains($produto->name, ['Açaí Copo','Açaí'])){
                return Str::contains($itens->descricao,'creme')
            }
        })
        $complementos = $produtos->filter(function($itens){
            if(Str::contains($produto->name, ['Açaí Copo','Açaí'])){
                return Str::contains($itens->descricao,'complemento')
            }
        })

        return view('livewire.show',[
            'produto'=>$produto,
            'produtos'=>$produto,
            'teste'=>$fruta
        ]);
    }
}
