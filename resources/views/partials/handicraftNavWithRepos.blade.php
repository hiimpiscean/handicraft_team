
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand"
            {{--       href="{{route('book.index')}}"--}}
          ><span>Handicraft</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="bookDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Handicraft </a>
                <div class="dropdown-menu" aria-labelledby="bookDropdown">
                  <a class="dropdown-item"
                     href="{{route('handicraft.index')}}"
                  >View All</a>
                  <a class="dropdown-item"
                     href="{{route('handicraft.create')}}"
                  >New Handicraft</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item"
                    {{--               href="{{route('book.reset')}}"--}}
                  >Reset data</a>
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
                  <a class="dropdown-item" href="{{route('customer.create')}}">New Customer</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>

