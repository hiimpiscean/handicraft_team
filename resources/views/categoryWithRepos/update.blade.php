@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Category</h1>


    @include('partials.errors')

    <form action="{{route('category.update', ['id_cate' => old('id_cate')?? $category->id_cate])}}" method="post">
      @csrf
      @include('categoryWithRepos.categoryFields')

      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
