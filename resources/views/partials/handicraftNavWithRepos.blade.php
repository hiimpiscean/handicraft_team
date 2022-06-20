<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">

    <a class="navbar-brand"

    >HandicraftWeb</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="hanDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Handicraft </a>
          <div class="dropdown-menu" aria-labelledby="hanDropdown">
            <a class="dropdown-item"
               href="{{route('handicraft.index')}}"
            >View All</a>
            <a class="dropdown-item"
               href="{{route('handicraft.create')}}"
            >New Handicraft</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="publisherDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="publisherDropdown">
            <a class="dropdown-item" href="{{route('admin.index')}}">View All</a>
            <a class="dropdown-item" href="{{route('admin.create')}}">New Admin</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="formatDropdown">
            <a class="dropdown-item" href="{{route('category.index')}}">View All</a>
            <a class="dropdown-item" href="{{route('category.create')}}">New category</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Customer
          </a>
          <div class="dropdown-menu" aria-labelledby="formatDropdown">
            <a class="dropdown-item" href="{{route('customer.index')}}">View All</a>
          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link "
             href="{{route('customer.create')}}"
          >New customer</a>
        </li>


      </ul>

      <ul class="navbar-nav">
        <li class="nav-item mr-3">
          <!-- try without mr-3 -->
          <a class="nav-link" href="#">
            <i class="bi bi-person"></i>
            {{\Illuminate\Support\Facades\Session::has('username')?
              \Illuminate\Support\Facades\Session::get('username') : ''}}
{{--            usernam lấy trong session nếu mà có usernam thì lấy username còn ko thì in nó rỗng--}}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('authHan.signout')}}">
            <i class="bi bi-box-arrow-left"></i>
            Logout
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>
