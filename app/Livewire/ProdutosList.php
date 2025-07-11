<?php

namespace App\Livewire;

use Livewire\Component;


class ProductsList extends Component
{
    public function render()
    {
        return view('livewire.products-list', ['products' => Product::all()]);
    }

    public function addToCart($productId)
    {
        $user = auth()->user();
        $sessionId = session()->getId();

        $cart = Cart::firstOrCreate(
            $user ? ['user_id' => $user->id] : ['session_id' => $sessionId],
            ['last_activity' => now()]
        );

        $cart->update(['last_activity' => now()]);

        CartItem::updateOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $productId],
            ['quantity' => DB::raw('quantity + 1')]
        );

        $this->emit('cartUpdated');
    }

}
