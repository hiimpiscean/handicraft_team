@extends('masters.handicraftMasterwithRepos')

@section('main')
{{--  <div class="container">--}}
{{--    <h1 class="display-4">Admin Index</h1>--}}
{{--    @include('adminWithRepos.sessionmessage')--}}
{{--    <table class="table table-hover">--}}
{{--      <thead class="thead-dark">--}}
{{--      <tr>--}}

{{--        <th scope="col">Username</th>--}}
{{--        <th scope="col">fullName</th>--}}

{{--        <th scope="col">phone</th>--}}
{{--        <th scope="col">email</th>--}}
{{--        <th scope="col">password</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--        <th scope="col">&nbsp;</th>--}}
{{--      </tr>--}}
{{--      </thead>--}}
{{--      <tbody>--}}
{{--      @foreach($admin as $a)--}}
{{--        <tr>--}}
{{--          <td>{{$a->username}}</td>--}}
{{--          <td>{{$a->fullName_a}}</td>--}}

{{--          <td>{{$a->phone_a}}</td>--}}
{{--          <td>{{$a->email_a}}</td>--}}
{{--          <td>{{$a->password}}</td>--}}
{{--          <td><a type="button" class="btn btn-primary btn-sm"--}}
{{--                 href="{{route('admin.show', ['id_a' => $a->id_a])}}"--}}
{{--            >Details</a>--}}
{{--          </td>--}}
{{--          <td><a type="button" class="btn btn-success btn-sm"--}}
{{--                 href="{{route('admin.edit', ['id_a' => $a->id_a])}}"--}}
{{--            >Edit</a>--}}
{{--          </td>--}}

{{--        </tr>--}}
{{--      @endforeach--}}
{{--      </tbody>--}}
{{--    </table>--}}

{{--  </div>--}}



{{-- /////////////////////////////////////////////////////////////////////// --}}
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
    .admin{
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
    <h1 class="display-4 admin" >Admin Index</h1>
    <div class="msg">

      @include('adminWithRepos.sessionmessage')
    </div>

    <div class="row ">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">

          <div class="panel-body" >
            <div class="table table-hover" >
              <table class="table table-striped table-bordered table-list">
                <thead class="thead-dark">
                <tr>


                  <th scope="col" class="text-center">Username</th>
                  <th scope="col" class="text-center">fullName</th>

                  <th scope="col" class="text-center">phone</th>
                  <th scope="col" class="text-center" >email</th>
                  {{--        <th scope="col">password</th>--}}
                  <th scope="col">&nbsp;</th>
                  <th scope="col">&nbsp;</th>
                  {{--        <th scope="col">&nbsp;</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($admin as $a)
                  <tr>
                    <td class="text-center">{{$a->username}}</td>
                    <td class="text-center" >{{$a->fullName_a}}</td>

                    <td class="text-center">{{$a->phone_a}}</td>
                    <td class="text-center" >{{$a->email_a}}</td>
                    {{--          <td>{{$a->password}}</td>--}}
                    <td class="text-center" ><a type="button" class="btn btn-primary btn-sm "
                           href="{{route('admin.show', ['id_a' => $a->id_a])}}"
                      >Details</a>
                    </td>
                    <td class="text-center" ><a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.edit', ['id_a' => $a->id_a])}}"
                      >Edit</a>
                    </td>

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
