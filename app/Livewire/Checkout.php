<?php

namespace App\Livewire;

use Livewire\Component;


class Checkout extends Component
{
    public function render()
    {
        return view('livewire.checkout');
    }

    public function placeOrder()
    {
        $user = auth()->user();
        $sessionId = session()->getId();

        $cart = Cart::with('items.product')
            ->where($user ? ['user_id' => $user->id] : ['session_id' => $sessionId])
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            session()->flash('error', 'Carrinho vazio.');
            return;
        }

        $total = $cart->items->sum(fn($item) => $item->product->price * $item->quantity);

        $order = Order::create([
            'user_id' => $user?->id,
            'total' => $total,
            'status' => 'pendente',
        ]);

        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // Limpa o carrinho
        $cart->items()->delete();
        if (!$user) $cart->delete();

        session()->flash('success', 'Pedido realizado com sucesso!');
    }
}
