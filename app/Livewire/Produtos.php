<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produto;

class Produtos extends Component
{
    public $produtos;

    public function mount()
    {
        $this->produtos = Produto::all();
    }
    
    public function render()
    {
        return view('livewire.produtos');
    }
}
