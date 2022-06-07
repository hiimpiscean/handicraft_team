@extends('masters.classMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">New Class</h1>
    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
    @include('partials.errors')

    <form action="{{route('class.store')}}" method="post">
      @csrf
      @include('classWithRepos.classFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
