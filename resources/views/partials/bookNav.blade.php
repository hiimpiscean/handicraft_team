<nav class="navbar navbar-expand-lg navbar-light bg-dark  " >
  <a class="navbar-brand text-white header  " href="#">BookWrom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle text-white-50 " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Books</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item"
             href="{{route('book.index')}}">View All

          </a>
          <a class="dropdown-item"
             href="{{route('book.viewbook')}}">
            New Book</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white-50  "  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Publishers </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item"
             href="{{route('book.index')}}">View All
          </a>
          <a class="dropdown-item" href="{{route('book.viewpublisher')}}">New Publishers</a>

        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white-50  " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Format</a>


        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item"
             href="{{route('book.index')}}">View All
          </a>
          <a class="dropdown-item" href="#">New Format</a>

        </div>
      </li>
    </ul>
  </div>
</nav>
