<div>
 <div class="gambiarra">
  <div class="bg-white shadow rounded-xl p-4 espacoy redo">
   <div class="comgrid">
    <h1 class="text-xl font-bold">{{ $produto->name }}</h1>
    <div class="acai">
     @if($produto->name == 'Açaí Copo')
     <img src="{{ asset('images/im.png')}}">
     @endif
     <p>{{ $produto->descricao }}</p>
    </div>
   </div>
    <p class="text-purple-700 font-semibold mt-2">Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
  </div>
  <div class="bg-white shadow rounded-xl p-4 espacoy redo">
   @foreach($teste as $ts)
   <h6>{{$ts->name}}</h6>
   @endforeach
  </div>
</div>
</div>
