@extends('masters.handicraftMaster')

@section('main')
  <div class="jumbotron jumbotron-detail-apple-pie container-fluid">
    <div class="container">
      <h1 class="display-3 text-white">Apple pie</h1>
    </div>
  </div>

  <div class="container">

    <h1>Apple pie
      <small>Our famous, number-one selling pie.</small>
    </h1>

    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="{{asset('images/products/applepie.jpg')}}" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">About this pie</h3>
        <p>Sweet ice cream jelly beans lemon drops. Pastry toffee fruitcake gingerbread jelly-o.
          Lollipop sesame snaps muffin. Macaroon halvah marshmallow sesame snaps sugar plum dragée.
          Wafer pudding sesame snaps tootsie roll sesame snaps cake chupa chups jelly beans.</p>
        <h3 class="my-3">Ingredients</h3>
        <ul>
          <li>Apple</li>
          <li>Sugar</li>
          <li>Eggs</li>
          <li>Milk</li>
        </ul>
        <div class="row">

          <div class="col-md-4">
            <strong>$14.95</strong>
          </div>
          <div class="col-md-8">
            <a type="button" href="shoppingbasket.html" data-toggle="modal" data-target="#addToBasketModal"
               class="btn btn-success float-right">
              Add to basket
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- <div class="table-responsive"> -->
      <table class="table">
        <!--table-dark table-hover table-bordered table-responsive  -->
        <thead>
        <!-- class="thead-light"-->
        <tr>
          <th scope="col">Ingredient</th>
          <th scope="col">Risk</th>
          <th scope="col">Percentage</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Apple</td>
          <td>Yes</td>
          <td>50%</td>
        </tr>
        <tr>
          <td>Eggs</td>
          <td>Yes</td>
          <td>10%</td>
        </tr>
        <tr>
          <td>Nuts</td>
          <td>Maybe</td>
          <td>&lt;0.1%</td>
        </tr>
        </tbody>
      </table>
      <!-- </div> -->

    </div>

    <div class="p-4 mb-3 mt-2 bg-light rounded border border-primary">
      <h4>A quote from Bethany</h4>
      <p class="mb-0 font-italic">My recipes have been in our family for generations. We hope you enjoy our
        pies! -
        Bethany
      </p>
    </div>

    <!-- <span class="border border-primary">test</span> -->

    <h3 class="my-4">Other customers also bought...</h3>

    <div class="row">
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{route('pie.applepie')}}">
          <img class="img-fluid" src="{{asset('images/products/strawberrypiesmall.jpg')}}" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{route('pie.applepie')}}">
          <img class="img-fluid" src="{{asset('images/products/rhubarbpiesmall.jpg')}}" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{route('pie.applepie')}}">
          <img class="img-fluid" src="{{asset('images/products/peachpiesmall.jpg')}}" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{route('pie.applepie')}}">
          <img class="img-fluid" src="{{asset('images/products/cranberrypiesmall.jpg')}}" alt="">
        </a>
      </div>
    </div>
  </div>

@endsection

@section('other')
  <div class="modal fade" tabindex="-1" id="addToBasketModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Bethany's Pie Shop</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apple pie was added to your basket</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue shopping</button>
          <button type="button" class="btn btn-primary">View basket</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer bg-dark">

    <div class="text-white">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">

          <div class="col-md-12 text-center">
            <a href="https://www.facebook.com/namanh2002"><i class="fa-brands fa-facebook text-while mr-4"></i></a>
            <a href="https://twitter.com/i/flow/single_sign_on"><i class="fa-brands fa-twitter text-while mr-4"></i></a>
            {{--              <a herf="https://twitter.com"><i class="fa-brands fa-twitter text-while mr-4"></i></a>--}}
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram text-while mr-4"></i></a>
            {{--              <a herf="#"><i class="fa-brands fa-instagram text-while mr-4"></i></a>--}}
          </div>
        </div>
      </div>
    </div>





  </footer>
@endsection
