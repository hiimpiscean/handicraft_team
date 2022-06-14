<style>


  .boy{
    margin-right: 100px;
    margin-left: 370px;
    margin-top: 10px;
    /*border: solid 1px red;*/

    width: 85%;

  }


</style>
<div class="boy">

<dl class="row " >


  <dt class="col-sm-3">Full Name</dt>
  <dd class="col-sm-9">{{ $customer->fullName_c }}</dd>

  <dt class="col-sm-3">Dob</dt>
  <dd class="col-sm-9">{{ $customer->dob }}</dd>

  <dt class="col-sm-3">Phone</dt>
  <dd class="col-sm-9">{{ $customer->phone_c }}</dd>

  <dt class="col-sm-3">Email</dt>
  <dd class="col-sm-9">{{$customer->email_c }}</dd>

  <dt class="col-sm-3">Address</dt>
  <dd class="col-sm-9">{{$customer->address_c }}</dd>

</dl>

</div>



{{--Test--}}
{{--<style>--}}
{{--  .panel-table .panel-body {--}}
{{--    padding: 0;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered {--}}
{{--    border-style: none;--}}
{{--    margin: 0;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type {--}}
{{--    text-align: center;--}}
{{--    width: 100px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr>th:last-of-type,--}}
{{--  .panel-table .panel-body .table-bordered>tbody>tr>td:last-of-type {--}}
{{--    border-right: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type,--}}
{{--  .panel-table .panel-body .table-bordered>tbody>tr>td:first-of-type {--}}
{{--    border-left: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>tbody>tr:first-of-type>td {--}}
{{--    border-bottom: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr:first-of-type>th {--}}
{{--    border-top: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-footer .pagination {--}}
{{--    margin: 0;--}}
{{--  }--}}

{{--  .panel-table .panel-footer .col {--}}
{{--    line-height: 34px;--}}
{{--    height: 34px;--}}
{{--  }--}}

{{--  .panel-table .panel-heading .col h3 {--}}
{{--    line-height: 30px;--}}
{{--    height: 30px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>tbody>tr>td {--}}
{{--    line-height: 34px;--}}
{{--  }--}}
{{--</style>--}}


{{--<div class="container">--}}
{{--  <div class="row">--}}
{{--    <div class="col-md-10 col-md-offset-1">--}}
{{--      <div class="panel panel-default panel-table">--}}

{{--        <div class="panel-body">--}}
{{--          <table class="table table-striped table-bordered table-list">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--              <th><em class="fa fa-cog"></em>--}}
{{--              </th>--}}
{{--              <th></th>--}}
{{--              <th>Họ tên</th>--}}
{{--              <th>Email</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--              <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>--}}
{{--              </td>--}}
{{--              <td></td>--}}
{{--              <td class="hidden-xs">1</td>--}}
{{--              <td></td>--}}
{{--              <td>{{ $customer->fullName_c }}</td>--}}
{{--              <td>{{$customer->email_c }}</td>--}}
{{--            </tr>--}}



{{--            </tbody>--}}
{{--          </table>--}}
{{--        </div>--}}

{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}










