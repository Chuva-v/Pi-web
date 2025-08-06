<div>


    <div class="gambiarra">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
            <div class="bg-white shadow rounded-xl p-4 espacoy">
                <h1 class="text-xl font-bold">{{ $produto->name }}</h1>
                <p>{{ $produto->descricao }}</p>
                <p class="text-purple-700 font-semibold mt-2">Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                <button wire:click="addToCart({{ $produto->id }})" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded w-full" >
                            Adicionar ao carrinho
                </button>
            </div>
        </div>
    </div>


</div>
