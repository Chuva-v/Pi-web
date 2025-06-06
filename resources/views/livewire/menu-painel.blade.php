<div>

<style>
    .navbar-nav {
      display: flex ;
      visibility: visible ;
    }
</style>
<nav class="navbar navbar-expand-lg bg-primary border-bottom border-body mb-5" data-bs-theme="dark">
  <div class="container-fluid">
  <!-- logo  -->
    <a class="navbar-brand" href="index.html">
      <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Finstadelivery.com.br%2Facaidoboca1&psig=AOvVaw0f-_9MYLUB2t40TbVyz7lx&ust=1749251633451000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPC-lqG0240DFQAAAAAdAAAAABAE" alt="Logo" height="30">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Menu -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="icecream.html">Icecream</a>
        </li>
      </ul>

      <form class="d-flex ms-3" role="search">
        <a href="#" class="btn btn-outline-light me-2">
          Login <i class="fa fa-user"></i>
        </a>
        <button class="btn btn-outline-light" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </form>

    </div>
  </div>
</nav>

<!--
<style>
    .navbar-nav {
      display: flex ;
      visibility: visible ;
    }
</style>  

  <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body mb-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><i class="bi bi-cast"></i> Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <span class="text text-light"><i class="bi bi-person"></i>{{auth()->user()->name}} <a class="text-decoration-none" href="#" wire:click="logout"> (Sair)</a></span> 
        </li>
      </ul>
    </div>
  </div>
</nav>
--->
</div>