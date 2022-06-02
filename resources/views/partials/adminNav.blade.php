<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{route('admin.index')}}">Handicraft Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">admins </a>
                    <div class="dropdown-menu" aria-labelledby="adminDropdown">
                        <a class="dropdown-item"
                           href="{{route('admin.index')}}"
                        >View All</a>
                        <a class="dropdown-item"
                           href="{{route('admin.create')}}"
                        >New admin</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"
                            {{--               href="{{route('admin.reset')}}"--}}
                        >Reset data</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="publisherDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Publishers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="publisherDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">New Publisher</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Publishers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="formatDropdown">
                        <a class="dropdown-item" href="#">View All</a>
                        <a class="dropdown-item" href="#">New Format</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
