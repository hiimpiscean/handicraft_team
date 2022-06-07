@extends('masters.handicraftMasterwithRepos')

@section('main')


  <div class="container">
    <h1 class="display-4">Handicraft Details</h1>
    @include('handicraftWithRepos.handicraftDetails')

    <a type="button" href="{{route('handicraft.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
