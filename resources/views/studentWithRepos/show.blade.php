@extends('masters.studentMasterWithRepos')

@section('main')


  <div class="container">
    <h1 class="display-4">Student Details</h1>
    @include('studentWithRepos.studentDetails')
    <a type="button" href="{{route('student.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
