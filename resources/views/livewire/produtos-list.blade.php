<div class="gambiarra">
@php
    use Illuminate\Support\Str;
@endphp

<div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
    @foreach ($produtos as $produto)
      @if(!Str::contains($produto->descricao,['fruta','creme','calda','complemento','vitamina']))
    
        <div class="bg-white shadow rounded-xl p-4 espacoy shadow hover:shadow-md transition">
          <a href="{{route('produto.show',$produto->id)}}">
            <h2 class="text-lg font-semibold">{{ $produto->name }}</h2>
            <p class="text-gray-600">{{ $produto->descricao ?? '' }}</p>
            <p class="text-gray-600 mb-2">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>

            @if ($produto->image_url)
                <img src="{{ $produto->image_url }}" alt="{{ $produto->name }}" class="w-full h-40 object-cover mb-2 rounded">
            @endif

          </a>
        </div>
      @endif
    @endforeach
</div>

</div>
