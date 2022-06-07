@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Customer</h1>


    @include('partials.errors')

    <form action="{{route('customer.update', ['id_c' => old('id_c')?? $customer->id_c])}}" method="post">
      @csrf
      @include('customerWithRepos.customerFields')

      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
