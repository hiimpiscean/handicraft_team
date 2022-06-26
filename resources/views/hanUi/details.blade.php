@extends('masters.hanUiMaster')

@section('main')
  <style>
    .view{
      margin-bottom: 60px;

    }
    .size{
      width: 70%;
    }
    .polaroid {
      position: relative;
      height: 400px;
    }
    .test {
      position: relative;
      margin-left: 40px;
    }

    .polaroid img {
      border: 10px solid #fff;
      -webkit-box-shadow: 3px 3px 3px #777;
      -moz-box-shadow: 3px 3px 3px #777;
      box-shadow: 3px 3px 3px #777;
    }

    .polaroid p {
      position: absolute;
      text-align: center;
      width: 100%;
      bottom: 0px;
      font: 400 18px/1 'Kaushan Script', cursive;
      color: #888;
    }
  </style>

  <div class="container ">

    {{--<h1>{{$product->name_p}}
    </h1>--}}
    <div class="heading_container heading_center pa" style="margin-bottom: 0.5rem; margin-top: 0.5rem">
                    <h1>
                      Product details
                    </h1>
                  </div>
          <div class=" d-flex justify-content-center">
            <div class="polaroid">
{{--              <p class="polaroid">Wassup, dude?</p>--}}
              <img class=" polaroid" src="{{asset('images/handicraf/'. $product->image_p)}}" alt="">
            </div>

            <div class="test"> {{--ok roi day--}}
              <h3 class="my-3">Product name</h3>
              <p>{{$product->name_p}}</p>
              <h3 class="my-3">About this product</h3>
              <p>{{$product->description_p}}</p>
              <h3 class="my-3">Size</h3>
              <ul>
                <li>{{$product->size_p}}</li>
              </ul>
              <div><h3>Price</h3></div>
              <div class="row">
                <div class="col-md-4">
                  <strong>${{$product->price_p}}</strong>
                </div>
                <div class="col-md-8">
                  <a type="button" href="shoppingbasket.html" data-toggle="modal" data-target="#addToBasketModal"
                     class="btn btn-success float-right">
                    Buy now
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
  <div class="view">

  </div>
        <!-- <span class="border border-primary">test</span> -->


      {{--  /////////////////////////////////////////////--}}
{{--    <div class="container tm-mt-big tm-mb-big">--}}
{{--      <div class="row">--}}
{{--        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">--}}
{{--          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">--}}
{{--            <div class="heading_container heading_center pa">--}}
{{--              <h1>--}}
{{--                Product details--}}
{{--              </h1>--}}
{{--            </div>--}}{{--lol, lay cai cu dau rooi :)))) - troong no cu sai sai?--}}
{{--            <div class="row">--}}

{{--              --}}{{--<div class="col-12" >--}}
{{--                <h2 class="tm-block-title d-inline-block" >Product</h2>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <div class="row tm-edit-product-row">--}}
{{--              <div class="col-xl-6 col-lg-6 col-md-12">--}}
{{--                <form action="" method="post" class="tm-edit-product-form">--}}
{{--                  <div class="form-group mb-3" style="margin: 50px 0">--}}
{{--                    <label--}}
{{--                      for="name"--}}
{{--                      >Name--}}
{{--                    </label>--}}
{{--                              <div class="col-md-4">--}}
{{--                                <strong>{{$product->name_p}}</strong>--}}
{{--                              </div>--}}
{{--                  </div>--}}
{{--                  <div class="form-group mb-3" style="margin: 50px 0">--}}
{{--                    <label--}}
{{--                      for="description"--}}
{{--                      >Description</label--}}
{{--                    >--}}
{{--                    <div class="col-md-4">--}}
{{--                      <strong>{{$product->description_p}}</strong>--}}
{{--                    </div>--}}
{{--                  </div>--}}

{{--                  <div class="row" style="margin: 50px 0">--}}
{{--                      <div class="form-group mb-3 col-xs-12 col-sm-6">--}}
{{--                          <label--}}
{{--                            for="expire_date"--}}
{{--                            >Size--}}
{{--                          </label>--}}
{{--                                  <div class="col-md-4">--}}
{{--                                    <strong>${{$product->size_p}}</strong>--}}
{{--                                  </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group mb-3 col-xs-12 col-sm-6">--}}
{{--                          <label--}}
{{--                            for="stock"--}}
{{--                            >Price--}}
{{--                          </label>--}}
{{--                          <input--}}
{{--                            id="stock"--}}
{{--                            name="stock"--}}
{{--                            type="text"--}}
{{--                            value="19,765"--}}
{{--                            class="form-control validate"--}}
{{--                          />--}}
{{--                                    <div class="col-md-4">--}}
{{--                                      <strong>${{$product->price_p}}</strong>--}}
{{--                                    </div>--}}
{{--                        </div>--}}
{{--                  </div>--}}
{{--                </form>--}}
{{--              </div>--}}
{{--              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">--}}
{{--                <div class="tm-product-img-edit mx-auto">--}}
{{--                  <img src="{{asset('images/handicraf/'. $product->image_p)}}" alt="Product image" class="img-fluid d-block mx-auto">--}}

{{--                </div>--}}
{{--                <div class="custom-file mt-3 mb-3">--}}

{{--                              <a type="button" href="shoppingbasket.html" data-toggle="modal" data-target="#addToBasketModal"--}}
{{--                                 class="btn btn-success float-right">--}}
{{--                                Buy now--}}
{{--                              </a>--}}

{{--                </div>--}}
{{--              </div>--}}

{{--            </form>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--  ////////////////////////////////////////////////--}}
@endsection

@section('other')

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
