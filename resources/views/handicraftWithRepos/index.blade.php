@extends('masters.handicraftMasterwithRepos')

@section('main')


<style>
  .panel-table .panel-body {
    padding: 0;
  }

  .panel-table .panel-body .table-bordered {
    border-style: none;
    margin: 0;
  }

  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type {
    text-align: center;
    width: 100px;
  }

  .panel-table .panel-body .table-bordered>thead>tr>th:last-of-type,
  .panel-table .panel-body .table-bordered>tbody>tr>td:last-of-type {
    border-right: 0px;
  }

  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type,
  .panel-table .panel-body .table-bordered>tbody>tr>td:first-of-type {
    border-left: 0px;
  }

  .panel-table .panel-body .table-bordered>tbody>tr:first-of-type>td {
    border-bottom: 0px;
  }

  .panel-table .panel-body .table-bordered>thead>tr:first-of-type>th {
    border-top: 0px;
  }

  .panel-table .panel-footer .pagination {
    margin: 0;
  }

  .panel-table .panel-footer .col {
    line-height: 34px;
    height: 34px;
  }

  .panel-table .panel-heading .col h3 {
    line-height: 30px;
    height: 30px;
  }

  .panel-table .panel-body .table-bordered>tbody>tr>td {
    line-height: 34px;
  }
  .center{
    margin-left: 220px;
    /*margin-right: 150px ;*/
  }
  .msg{
    margin: 0 200px 0 20px ;
  }
  .width{
    width: 10%;
  }
 #name{
   width: 20%;
 }
 .null{
   width: 10px;
 }
  .han{
    /*border: solid 1px red;*/
    padding-left: 280px ;
    padding-bottom: 10px;
    padding-top: 30px;
  }
  .cate{
    width: 50px;
  }
.boy{
  margin-right: 100px;
  margin-left: 215px;
  /*border: solid 1px red;*/
  width: 75%;
}
.but{
  width: 10%;
}
  .header__navbar-item{
    margin: 0 8px;
    position: relative;
    min-height: 26px;
    cursor: pointer;
  }
  .header__navbar-item--has-qr .header__qr{
    position: absolute;
  }
  .header__navbar-item--has-qr:hover .header__qr{
    display: block;
  }

  .header__qr{
    width: 270px;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 120%;
    padding: 8px;
    border-radius: 2px;
    display: none;
    animation: FadeOn ease-in 0.85s;
  }
  .header__qr-img{
    width: 100px;
    /*height: 100px;*/
    z-index: 10;

  }
/*.header__qr{*/
/*  width: 270px;*/
/*  z-index: 2;*/
/*  position: absolute;*/
/*  left: 0;*/
/*  top: 120%;*/
/*  padding: 8px;*/
/*  border-radius: 2px;*/
/*  display: none;*/
/*  animation: FadeOn ease-in 0.85s;*/
/*}*/
/*.header__qr-img{*/
/*  width: 100%;*/
/*  z-index: 10;*/
/*}*/
/*.header__navbar-item--has-qr .header__qr{*/
/*  position: absolute;*/
/*}*/
/*.header__qr::before{*/
/*  content: "";*/
/*  display: block;*/
/*  position: absolute;*/
/*  width: 100%;*/
/*  height: 20px;*/
/*  left: 0;*/
/*  top: -18px;*/
/*}*/




</style>

<div class="container  boy">
  <h1 class="display-4 han">Handicraft Index</h1>
  <div class="msg">

    @include('handicraftWithRepos.sessionmessage')
  </div>

  <div class="row ">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default panel-table">

                <div class="panel-body" >
        <div class="table table-hover" >
          <table class="table table-striped table-bordered table-list">
            <thead class="thead-dark">
            <tr>

              <th scope="col" id="name">Name</th>
{{--<th scope="col" > abc</th>--}}
{{--              <th scope="col"> image</th>--}}
              <th scope="col" class="width">Price($)</th>
              <th scope="col" class="text-center cate" >Category</th>
              <th scope="col" class="null ">&nbsp;</th>
              <th scope="col" class="null ">&nbsp;</th>
              <th scope="col" class="null ">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                  @foreach($product as $p)
                    <tr>

                      <td class="header__navbar-item header__navbar-item--has-qr  ">{{$p->name_p}}
                        <div class="header__qr">
                          <img src="{{asset('images/handicraf/'. $p->image_p)}}" alt="" class="header__qr-img">
                        </div>
                      </td>

                      <td class="text-center "  >{{$p->price_p}}</td>
                      <td class="text-center ">{{$p->categoryName}}</td>
                      <td class="but"><a type="button" class="btn btn-primary btn-sm "
                             href="{{route('handicraft.show', ['id_p' => $p->id_p])}}"
                        >Details</a>
                      </td>
                      <td  class="but" ><a type="button" class="btn btn-success btn-sm "
                             href="{{route('handicraft.edit', ['id_p' => $p->id_p])}}"
                        >Edit</a>
                      </td>
                      <td class="but">

                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('handicraft.confirm', ['id_p' => $p->id_p])}}"
                        >Delete</a></td>
                    </tr>
                  @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection

@section('script')
@endsection
