@extends('masters.adminMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">New Book</h1>
    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
    @include('partials.errors')

    <form action="{{route('admin.store')}}" method="post">
      @csrf
      @include('admin.cateFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
