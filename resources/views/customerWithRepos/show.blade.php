@extends('masters.handicraftMasterwithRepos')

@section('main')


  <div class="container">
    <h1 class="display-4">Customer Details</h1>
    @include('customerWithRepos.customerDetails')
    <a type="button" href="{{route('customer.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
