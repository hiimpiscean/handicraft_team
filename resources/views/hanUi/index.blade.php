@extends('masters.hanUiMaster')

@section('main')


  <style>
    .pa{
      margin-top: 50px;
    }
    .view{
      margin-bottom: 30px;

    }
    .margin{
      margin-right: 5px;
    }
.flexitem{
  justify-content:flex-start;
  flex-direction: row;
}

  </style>
{{--/////////////////////////////////////////////////////////////////////--}}
  <body class="sub_page">
  <section class="food_section ">
    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <div class="container">
              <div class="carousel-caption">
                <h1>Welcome to Handicraft Shop</h1>
                <p></p>
                <p></p>
              </div>
            </div>

            <img src="{{asset('images/images/tre2.PNG')}}" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item" data-interval="2000">
            <div class="container">
              <div class="carousel-caption">
                <h1>Welcome to Handicraft Shop</h1>
                <p></p>
                <p></p>
              </div>
            </div>
            <img src="{{asset('images/images/tre2.PNG')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption">
                <h1>Welcome to Handicraft Shop</h1>
                <p></p>
                <p></p>
              </div>
            </div>
            <img src="{{asset('images/images/tre2.PNG')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      {{--      ///////////////////////////////--}}


      <div class="heading_container heading_center pa">
        <h1 >
          Our Products
        </h1>
      </div>

      <ul class="filters_menu">
        {{--        <li class="active" data-filter="*">All</li>--}}
        <li class="active margin" data-filter=".a" >Vase</li>
        <li class="active margin" data-filter=".b">Basket</li>
        <li class="active margin" data-filter=".c">House </li>
        {{--        <li data-filter=".fries">Fries</li>--}}
      </ul>
      <div class="filters-content flexitem">
        <div class="row grid">

          @include('partials.productLoop')

    </div>
    </div>
      <div class="btn-box view">
        {{--<a href="">
          View More
        </a>--}}
      </div>
    </div>
  </section>
  </body>

{{--  /////////////////////////////////////////////////////////////////////--}}
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +84 123456789
                </span>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  minh@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Handicraft
            </a>
            <p>
              The brand is present worldwide with 1000 facilities and has been growing since 1972.
            </p>
            <div class="footer_social">
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            6.00 Am -11.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Copyright belongs to
          <a href="#">NVM Handicraft</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="#" target="_blank">Handicraft Shop</a>
        </p>
      </div>
    </div>
  </footer>
@endsection

@section('script')
@endsection
