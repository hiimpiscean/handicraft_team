@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('categoryWithRepos.categoryDetails')

    <form action="{{route('category.destroy', ['id_cate' =>$category->id_cate])}}" method="post">
      @csrf
      <input type="hidden" name="id_cate" value="{{$category->id_cate}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
