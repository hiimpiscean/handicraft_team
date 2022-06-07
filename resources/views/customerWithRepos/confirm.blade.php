@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('customerWithRepos.customerDetails')

    <form action="{{route('customer.destroy', ['id_c' =>$customer->id_c])}}" method="post">
      @csrf
      <input type="hidden" name="id_c" value="{{$customer->id_c}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('customer.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
