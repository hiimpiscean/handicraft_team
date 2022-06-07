@extends('masters.classMasterWithRepos')

@section('main')


  <div class="container">
    <h1 class="display-4">Class Details</h1>
    @include('classWithRepos.classDetails')
    <a type="button" href="{{route('class.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
