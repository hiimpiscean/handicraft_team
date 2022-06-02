@extends('masters.adminMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Category</h1>


    @include('partials.errors')

    <form action="{{route('book.update', ['id_cate' => old('id_cate')?? $book->id_cate])}}" method="post">
      @csrf
      @include('admin.cateFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
