@extends('masters.pieMaster')

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
        <img class="card-img-top" src="{{asset('images/handicraf/tre2.PNG')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset('images/handicraf/tre2.PNG')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="{{asset('images/handicraf/tre2.PNG')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

  </div>
@endsection
