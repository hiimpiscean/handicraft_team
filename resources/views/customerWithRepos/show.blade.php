@extends('masters.handicraftMasterwithRepos')

@section('main')
  <style>

    .han{
      margin-top: 50px;
      margin-bottom: 20px;
    }
    .cancel{
      margin-left: 800px;
    }
  </style>

  <div class="container">
    <h1 class="display-4 text-center han ">Customer Details</h1>
    @include('customerWithRepos.customerDetails')
    <a type="button" href="{{route('customer.index')}}" class="btn btn-info cancel ">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
