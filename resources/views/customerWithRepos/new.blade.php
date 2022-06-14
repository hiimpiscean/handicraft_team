@extends('masters.handicraftMasterwithRepos')

<style>

  .but{
    margin: 30px 20px 40px 280px;
    /*border : solid 1px red;*/

  }
  .cancel{
    margin-left: 400px;
  }
/*.cancel{*/
/*  margin: 0 700px 200px ;*/
/*  border : solid 1px red;*/
/*}*/
</style>
@section('main')
  <div class="container">
{{--    <h1 class="display-4">New Customer</h1>--}}

    @include('partials.errors')

    <form action="{{route('customer.store')}}" method="post">
      @csrf
      @include('customerWithRepos.customerFields')
      <div class="but">
        <button type="submit" class="btn btn-dark">Submit</button>
        <a href="{{route('customer.index')}}" class="btn btn-info cancel">Cancel</a>
      </div>
{{--      <div class="cancel">--}}
{{--        <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>--}}
{{--      </div>--}}
{{--      <button type="submit" class="btn btn-dark">Submit</button>--}}
{{--      <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>--}}
    </form>
  </div>
@endsection
