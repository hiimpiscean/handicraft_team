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
          Categories
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

      @foreach($category as $c)
              <div class="col-sm-6 col-lg-4 all ">
{{--        //////////////////////////--}}


              <div class="box">
                <div>
                  <div class="img-box">
                    {{--  ///////////////////////////// link details ///////////////////////////////////--}}
                    <a href="{{route('hanUi.details')}}">
                      <img src="{{asset('images/handicraf/'. $c->image_cate)}}"  alt="">
                    </a>
                  </div>
                  <div class="detail-box">
                    <h5>
                      <a type="button" class="btn btn-link" href="{{route('hanUi.showproducts', ['id_cate' => $c->id_cate])}}">{{$c->name_cate}}
                    </h5>
{{--                    <p>--}}
{{--                      {{$c->description_p}}--}}
{{--                    </p>--}}
                    {{--<div class="options">
                      <h6>
                       ${{$c->price_p}}
                      </h6>
                      <a href="">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                          <g>
                            <g>
                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                      </svg>
                      </a>
                    </div>--}}
                  </div>
                </div>
              </div>
              </div>


      @endforeach

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
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +84 123456789
                </span>
              </a>
              <a href="">
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
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
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