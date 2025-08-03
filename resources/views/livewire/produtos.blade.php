<div class="gambiarra">
@php
    use Illuminate\Support\Str;
@endphp
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
    @foreach ($produtos as $produto)
      @if(!Str::contains($produto->descricao,['fruta','creme','calda','complemento','vitamina']))
        <div class="bg-white shadow rounded-xl p-4 espacoy">
          <a href="{{route('produto.show',$produto->id)}}">
            <h2 class="text-lg font-bold">{{ $produto->name }}</h2>
            <p class="text-gray-600">{{ $produto->descricao ?? '' }}</p>
            <p class="text-purple-700 font-semibold mt-2">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
            </a>
        </div>
      @endif
    @endforeach
</div>
</div>
