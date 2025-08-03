<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produto;

class ProdutosList extends Component
{
    public function render()
    {
        return view('livewire.produtos-list', ['produtos' => Produto::all()]);
    }

    public function addToCart($produtoId)
    {
        $user = auth()->user();
        $sessionId = session()->getId();

        $cart = Cart::firstOrCreate(
            $user ? ['user_id' => $user->id] : ['session_id' => $sessionId],
            ['last_activity' => now()]
        );

        $cart->update(['last_activity' => now()]);

        CartItem::updateOrCreate(
            ['cart_id' => $cart->id, 'produto_id' => $produtoId],
            ['quantity' => DB::raw('quantity + 1')]
        );

        $this->emit('cartUpdated');
    }

}
