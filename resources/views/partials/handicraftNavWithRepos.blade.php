<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">

    <a class="navbar-brand text-light"

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



{{--//////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--<header class="bg-nav">--}}
{{--  <div class="flex justify-between">--}}
{{--    <div class="p-1 mx-3 inline-flex items-center">--}}
{{--      <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>--}}
{{--      <h1 class="text-white p-2">Logo</h1>--}}
{{--    </div>--}}
{{--    <div class="p-1 flex flex-row items-center">--}}
{{--      <a href="https://github.com/tailwindadmin/admin" class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a>--}}


{{--      <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">--}}
{{--      <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Adam Wathan</a>--}}
{{--      <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">--}}
{{--        <ul class="list-reset">--}}
{{--          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>--}}
{{--          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>--}}
{{--          <li>--}}
{{--            <hr class="border-t mx-2 border-grey-ligght">--}}
{{--          </li>--}}
{{--          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</header>--}}
