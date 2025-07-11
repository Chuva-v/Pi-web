<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
    @foreach ($produtos as $produto)
        <div class="bg-white shadow rounded-xl p-4">
            <h2 class="text-lg font-bold">{{ $produto->name }}</h2>
            <p class="text-gray-600">{{ $produto->descricao ?? '' }}</p>
            <p class="text-purple-700 font-semibold mt-2">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        </div>
    @endforeach
</div>
