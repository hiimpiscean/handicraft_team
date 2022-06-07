@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">New Handicraft</h1>

    @include('partials.errors')

    <form action="{{route('handicraft.store')}}" method="post">
      @csrf
      @include('handicraftWithRepos.handicraftFieldsNew')
      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('handicraft.index')}}" class="btn btn-info" >Cancel</a>
    </form>
  </div>
@endsection
