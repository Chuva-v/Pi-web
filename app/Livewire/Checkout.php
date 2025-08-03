<?php

namespace App\Livewire;

use Livewire\Component;


class Checkout extends Component
{
    public $qrCodePix;

    public function mount()
    {
        $user = auth()->user();
        $sessionId = session()->getId();

        $cart = Cart::with('items.produto')
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
                'produto_id' => $item->produto_id,
                'quantity' => $item->quantity,
                'price' => $item->produto->price,
            ]);
        }

        $cart->items()->delete();
        if (!$user) $cart->delete();

        $this->qrCodePix = $this->gerarQrPix($order);
    }

    public function gerarQrPix($order)
    {
        $chave = '81991136726@pix.com.br';
        $nome = 'Açaí&Cia';
        $cidade = 'Lagoa de Itaenga';
        $txid = 'PED' . $order->id;
        $valor = number_format($order->total, 2, '.', '');
        $descricao = 'Pedido #' . $order->id;

        return "00020126360014BR.GOV.BCB.PIX01" . strlen($chave) . $chave .
               "520400005303986540" . strlen($valor) . $valor .
               "5802BR5914$nome6009$cidade62070503***6304";
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}