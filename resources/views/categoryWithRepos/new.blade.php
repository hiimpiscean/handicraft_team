@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">New Category</h1>

    @include('partials.errors')

    <form action="{{route('category.store')}}" method="post">
      @csrf
      @include('categoryWithRepos.categoryFieldsNew')
      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
