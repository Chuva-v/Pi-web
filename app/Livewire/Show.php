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
  $produto = Produto::findOrFail($this->id);
  return view('livewire.show',[
   'produto'=>$produto,
   'produtos'=>Produto::all()
  ]);
 }
}
