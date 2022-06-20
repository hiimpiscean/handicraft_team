@extends('masters.handicraftMasterwithRepos')

@section('main')


{{--  //////////////////////////////////////////////////////////////////////--}}

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
    width: 40px;
  }

  .cate{
    padding-left: 280px ;
    padding-bottom: 10px;
    padding-top: 30px;
  }

  .boy{
    margin-right: 100px;
    margin-left: 215px;
    /*border: solid 1px red;*/
    width: 75%;
  }
</style>

<div class="container boy">
  <h1 class="display-4 cate">Category Index</h1>
  <div class="msg">

    @include('categoryWithRepos.sessionmessage')
  </div>

  <div class="row ">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default panel-table">

        <div class="panel-body" >
          <div class="table table-hover" >
            <table class="table table-striped table-bordered table-list">
              <thead class="thead-dark">
              <tr>


                <th scope="col" class="text-center" >Name</th>
                <th scope="col" class="text-center">Image</th>

                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
              </tr>
              </thead>
              <tbody>
              @foreach($category as $c)
                <tr>

                  <td class="text-center" >{{$c->name_cate}}</td>

                  <td class="text-center">
                    <a href="{{route('category.show', ['id_cate' =>$c->id_cate])}}">
                      <img src="{{asset('images/category/'. $c->image_cate)}}" alt="" style="width: 30%">
                    </a>
                  </td>

                  <td class="text-center" ><a type="button" class="btn btn-primary btn-sm"
                         href="{{route('category.show', ['id_cate' => $c->id_cate])}}"
                    >Details</a>
                  </td>
                  <td class="text-center"><a type="button" class="btn btn-success btn-sm"
                         href="{{route('category.edit', ['id_cate' => $c->id_cate])}}"
                    >Edit</a>
                  </td>
                  <td class="text-center">
                    <a type="button" class="btn btn-danger btn-sm"
                       href="{{route('category.confirm', ['id_cate' => $c->id_cate])}}"
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
