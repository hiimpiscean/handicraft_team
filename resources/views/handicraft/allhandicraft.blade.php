@extends('masters.handicraftMaster')

@section('main')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/products/christmasapplepiesmallsquare.jpg')}}">
        <h2>Christmas apple pie</h2>
        <p>Happy holidays with this pie!</p>
        <p><a class="btn btn-primary" href="{{route('handicraft.applepie')}}" role="button">View details</a></p>
      </div>
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/products/cranberrypiesmallsquare.jpg')}}">
        <h2>Cranberry pie</h2>
        <p>A Christmas favorite</p>
        <p><a class="btn btn-primary" href="{{route('handicraft.applepie')}}" role="button">View details</a></p>
      </div>
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/products/pumpkinpiesmallsquare.jpg')}}">
        <h2>Pumpkin pie</h2>
        <p>Our Halloween favorite</p>
        <p><a class="btn btn-primary" href="{{route('handicraft.applepie')}}" role="button">View details</a></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/products/applepiesmall.jpg')}}">
        <h2>Apple pie</h2>
        <p>Our famous apple pies!</p>
        <p><a class="btn btn-primary" href="{{route('handicraft.applepie')}}" role="button">View details</a></p>
      </div>
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/products/blueberrycheesecakesmall.jpg')}}">
        <h2>Blueberry cheese cake</h2>
        <p>A Christmas favorite</p>
        <p><a class="btn btn-primary" href="{{route('handicraft.applepie')}}" role="button">You'll love it!</a></p>
      </div>
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/products/cheesecakesmall.jpg')}}">
        <h2>Cheese cake</h2>
        <p>Plain cheese cake. Plain pleasure.</p>
        <p><a class="btn btn-primary" href="{{route('handicraft.applepie')}}" role="button">View details</a></p>
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