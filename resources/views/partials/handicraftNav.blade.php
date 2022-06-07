<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary-custom">
  <div class="container">

    <a class="navbar-brand" href="{{route('home.index')}}">
      <img src="{{asset('images/handicraf/logo1.png')}}" width="35" height="35" class="d-inline-block align-top" alt="">
      Handicraft Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home.index')}}">Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('handicraft.wood')}}">wood</a>
            <a class="dropdown-item" href="{{route('handicraft.ceramic')}}">ceramic</a>
            <a class="dropdown-item" href="{{route('handicraft.bamboo')}}">bamboo</a>
            <a class="dropdown-item" href="{{route('handicraft.metal')}}">metal</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('handicraft.allhandicraft')}}">All</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('handicraft.order')}}">Order</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
