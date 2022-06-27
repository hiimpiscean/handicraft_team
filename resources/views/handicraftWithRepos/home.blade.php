@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    @include('partials.welcomeCarousel')

    <div class="row">
      <div class="col-md-8">
        <h2 class="pb-4 mb-4 font-italic">
          Introduce
        </h2>
        <p>
          Venus Handicrafts Company is recognized as a company specializing in manufacturing and importing
          decorative handicrafts for global importers,
          wholesalers and retailers since 1972.
        </p>
        <p>

          In today's 4.0 era, handicraft products are being sold a lot on e-commerce platforms, websites and apps, ...
          The company has maintained its market value all over the world.
          the world and they want us to enhance their products and brands by changing the look and feel of
          their website to be more accessible to foreign customers and ensure customer satisfaction.
        </p>
        <p>
          The Handicraft Store creates collections: baskets, lanterns, porcelain vases, ceramic vases, porcelain vases,
          bronze vases and beautiful handmade wooden toys for everyone,
          everything is made with great care. In this way we can guarantee that our products are absolutely the best.
        </p>
      </div>

    </div>




    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="{{asset('images/cusHan/anh1.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset('images/cusHan/bak4.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset('images/cusHan/anh2.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
    </div>

  </div>

  <footer class="page-footer bg-dark">

    <div class="text-white">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">

          <div class="col-md-12 text-center">
            <a href="#"><i class="fa-brands fa-facebook text-while mr-4"></i></a>
            <a href="#"><i class="fa-brands fa-twitter text-while mr-4"></i></a>
            {{--              <a herf="https://twitter.com"><i class="fa-brands fa-twitter text-while mr-4"></i></a>--}}
            <a href="#"><i class="fa-brands fa-instagram text-while mr-4"></i></a>
            {{--              <a herf="#"><i class="fa-brands fa-instagram text-while mr-4"></i></a>--}}
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection
