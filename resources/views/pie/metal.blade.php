@extends('masters.pieMaster')

@section('main')
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/handicraf/binhgong.PNG')}}">
        <h2>Christmas apple pie</h2>
        <p>Happy holidays with this pie!</p>
        <p><a class="btn btn-primary" href="{{route('pie.applepie')}}" role="button">View details</a></p>
      </div>
      <div class="col-md-4">
        <img width="175" height="175" src="{{asset('images/handicraf/binhdong.PNG')}}">
        <h2>Cranberry pie</h2>
        <p>A Christmas favorite</p>
        <p><a class="btn btn-primary" href="{{route('pie.applepie')}}" role="button">View details</a></p>
      </div>

      <div class="card-group" >
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
