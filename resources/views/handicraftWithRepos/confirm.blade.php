@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('handicraftWithRepos.handicraftDetails')

    <form action="{{route('handicraft.destroy', ['id_p' =>$product->id_p])}}" method="post">
      @csrf
      <input type="hidden" name="id_p" value="{{$product->id_p}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('handicraft.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
