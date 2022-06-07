@extends('masters.teacherMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">New Teacher</h1>
    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
    @include('partials.errors')

    <form action="{{route('teacher.store')}}" method="post">
      @csrf
      @include('teacherWithRepos.teacherFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
