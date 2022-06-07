@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Update Handicraft</h1>
    @include('partials.errors')
    <form action="{{route('handicraft.update', ['id_p' => old('id_p')?? $product->id_p])}}" method="post">
      @csrf
      @include('handicraftWithRepos.handicraftFields')

      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('handicraft.index')}}" class="btn btn-info" >Cancel</a>
    </form>
  </div>
@endsection
