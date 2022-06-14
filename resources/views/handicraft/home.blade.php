@extends('masters.handicraftMaster')
@section('main')
  <style>
    .main-container{
      padding-top: 0px;
    }

    .index-intro{
      width:100%;
      /*background-color: #f3f3f3 ;*/
      /*background-image: url('/background.jpg');*/
    }
    .index-intro .jumbotron{
     padding:10px ;
      margin: 0px;

      background-size: cover;
      background-repeat: no-repeat;
    }
    .img{
      padding-left: 0px;
      padding-right: 55px;
      width: 1150px;
      height: 270px;
      padding-bottom: 20px;
    }
    /*body{*/
    /*  background-image: url('/background.jpg');*/
    /*}*/
.gap{
  margin:20px;

}

.gap-group{
  margin-top:150px ;
}
  </style>

<section class="awe-section-1">



<div class="container">

{{--  <div class="jumbotron">--}}

    <div class="col-sm-4 center">

      <img class="img-responsive img"   src="../images/handicraf/anh5.jpg"   alt="">

    </div>


{{--  </div>--}}




  <div class="card-group gap-group">
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/anh1.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/bak4.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/anh2.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/anh2.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>

  </div>
  <div class="card-group gap-group">
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/anh1.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/bak4.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/anh2.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card gap">
      <img class="card-img-top" src="{{asset('images/cusHan/anh2.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>

  </div>

  </div>
</div>
</section>


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
