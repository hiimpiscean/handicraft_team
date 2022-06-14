@extends('masters.handicraftMasterwithRepos')

@section('main')


{{--  <div class="container">--}}
{{--    <h1 class="display-4">Customer Index</h1>--}}
{{--    @include('customerWithRepos.sessionmessage')--}}
{{--    <table class="table table-hover">--}}
{{--      <thead class="thead-dark">--}}
{{--      <tr>--}}

{{--        <th scope="col">FullName</th>--}}
{{--        <th scope="col">DOB</th>--}}
{{--        <th scope="col">Phone</th>--}}
{{--        <th scope="col">Email</th>--}}
{{--        <th scope="col">Address</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--      </tr>--}}
{{--      </thead>--}}
{{--      <tbody>--}}
{{--      @foreach($customer as $c)--}}
{{--        <tr>--}}
{{--          <td>{{$c->fullName_c}}</td>--}}
{{--          <td>{{$c->dob}}</td>--}}
{{--          <td>{{$c->phone_c}}</td>--}}
{{--          <td>{{$c->email_c}}</td>--}}
{{--          <td>{{$c->address_c}}</td>--}}
{{--          <td><a type="button" class="btn btn-primary btn-sm"--}}
{{--                 href="{{route('customer.show', ['id_c' => $c->id_c])}}"--}}
{{--            >Details</a>--}}
{{--          </td>--}}
{{--          <td><a type="button" class="btn btn-success btn-sm"--}}
{{--                 href="{{route('customer.edit', ['id_c' => $c->id_c])}}"--}}
{{--            >Edit</a>--}}
{{--          </td>--}}
{{--          <td>--}}
{{--            <a type="button" class="btn btn-danger btn-sm"--}}
{{--               href="{{route('customer.confirm', ['id_c' => $c->id_c])}}"--}}
{{--            >Delete</a></td>--}}
{{--        </tr>--}}
{{--      @endforeach--}}
{{--      </tbody>--}}
{{--    </table>--}}

{{--  </div>--}}
{{-- ////////////////////////////////////////////////////////////////////////// --}}

{{--  <div class="container">--}}
{{--    <h1 class="display-4">Customer Index</h1>--}}
{{--    @include('customerWithRepos.sessionmessage')--}}
{{--    <table class="table table-hover">--}}
{{--      <thead class="thead-dark">--}}
{{--      <tr>--}}

{{--        <th scope="col">FullName</th>--}}
{{--        <th scope="col">DOB</th>--}}
{{--        <th scope="col">Phone</th>--}}
{{--        <th scope="col">Email</th>--}}
{{--        <th scope="col">Address</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--      </tr>--}}
{{--      </thead>--}}
{{--      <tbody>--}}
{{--      @foreach($customer as $c)--}}
{{--        <tr>--}}
{{--          <td>{{$c->fullName_c}}</td>--}}
{{--          <td>{{$c->dob}}</td>--}}
{{--          <td>{{$c->phone_c}}</td>--}}
{{--          <td>{{$c->email_c}}</td>--}}
{{--          <td>{{$c->address_c}}</td>--}}
{{--          <td><a type="button" class="btn btn-primary btn-sm"--}}
{{--                 href="{{route('customer.show', ['id_c' => $c->id_c])}}"--}}
{{--            >Details</a>--}}
{{--          </td>--}}
{{--          <td><a type="button" class="btn btn-success btn-sm"--}}
{{--                 href="{{route('customer.edit', ['id_c' => $c->id_c])}}"--}}
{{--            >Edit</a>--}}
{{--          </td>--}}
{{--          <td>--}}
{{--            <a type="button" class="btn btn-danger btn-sm"--}}
{{--               href="{{route('customer.confirm', ['id_c' => $c->id_c])}}"--}}
{{--            >Delete</a></td>--}}
{{--        </tr>--}}
{{--      @endforeach--}}
{{--      </tbody>--}}
{{--    </table>--}}

{{--  </div>--}}


{{--  ////////////////////////////////////////////////////////////////////////////////////////////--}}

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

  .cus{
    /*border: solid 1px red;*/
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

{{--<div class="msg">--}}

{{--  @include('customerWithRepos.sessionmessage')--}}
{{--</div>--}}
<div class="container boy">
  <h1 class="display-4 cus">Customer Index</h1>
  <div class="msg">

    @include('customerWithRepos.sessionmessage')
  </div>
{{--  @include('customerWithRepos.sessionmessage')--}}
  <div class="row ">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default panel-table">

{{--        <div class="panel-body" >--}}
          <div class="table table-hover" >
          <table class="table table-striped table-bordered table-list">
            <thead class="thead-dark">
            <tr>

              <th scope="col" class="text-center" >FullName</th>
              <th scope="col" class="text-center" >DOB</th>
              <th scope="col" class="text-center" >Phone</th>
              <th scope="col" class="text-center" >Email</th>
{{--              <th scope="col" class="text-center" >Address</th>--}}
              <th scope="col">&nbsp;</th>
              <th scope="col">&nbsp;</th>
              <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $c)
              <tr>
                <td class="text-center" >{{$c->fullName_c}}</td>
                <td class="text-center" >{{$c->dob}}</td>
                <td class="text-center" >{{$c->phone_c}}</td>
                <td class="text-center" >{{$c->email_c}}</td>
{{--                <td class="text-center" >{{$c->address_c}}</td>--}}
                <td class="text-center" ><a type="button" class="btn btn-primary btn-sm"
                       href="{{route('customer.show', ['id_c' => $c->id_c])}}"
                  >Details</a>
                </td>
                <td class="text-center" ><a type="button" class="btn btn-success btn-sm"
                       href="{{route('customer.edit', ['id_c' => $c->id_c])}}"
                  >Edit</a>
                </td>
                <td class="text-center" >
                  <a type="button" class="btn btn-danger btn-sm"
                     href="{{route('customer.confirm', ['id_c' => $c->id_c])}}"
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
