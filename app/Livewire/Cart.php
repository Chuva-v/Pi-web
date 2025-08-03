<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $items = [];

    protected $listeners = ['cartUpdated' => 'loadCart'];

    public function mount() { $this->loadCart(); }

    public function loadCart()
    {
        $user = auth()->user();
        $sessionId = session()->getId();

        $cart = Cart::with('items.produto')
            ->where($user ? ['user_id' => $user->id] : ['session_id' => $sessionId])
            ->where(function ($q) {
                $q->whereNull('user_id')->where('last_activity', '>=', now()->subHour())
                  ->orWhereNotNull('user_id');
            })
            ->first();

        $this->items = $cart ? $cart->items : collect();
    }

    public function removeItem($itemId)
    {
        CartItem::destroy($itemId);
        $this->loadCart();
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
