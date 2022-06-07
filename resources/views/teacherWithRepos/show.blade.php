@extends('masters.teacherMasterWithRepos')

@section('main')


  <div class="container">
    <h1 class="display-4">Teacher Details</h1>
    @include('teacherWithRepos.teacherDetails')
    <a type="button" href="{{route('teacher.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
