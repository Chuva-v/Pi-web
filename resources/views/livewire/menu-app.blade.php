<div>
  <div class="header_section">
         <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

               <a class="navbar-brand" href="{{route('home') }}"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item ">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : ''}}" @if(request()->routeIs('home')) aria-current="page" @endif href="{{route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('sobre') ? 'active' : ''}}" @if(request()->routeIs('sobre')) aria-current="page" @endif href="{{route('sobre')}}">Sobre</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link  {{ request()->routeIs('produto') ? 'active' : ''}}" @if(request()->routeIs('produto')) aria-current="page" @endif href="{{route('produto')}}">Sorvetes</a>
                     </li>
                     <li class="nav-item" >
                       <a  class="nav-link  {{ request()->routeIs('login') ? 'active' : ''}}" @if(request()->routeIs('login')) aria-current="page" @endif href="{{route('login')}}">Login</a>
                     </li>
                    
                  </ul>
               </div>
            </nav>
         </div>
         
         @if(request()->routeIs('home'))
          @livewire('banner')
         @endif
         
      </div>

</div>
