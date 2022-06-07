@extends('masters.bookMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">New Book</h1>

    @include('partials.errors')

    <form
      action="{{route('book.store')}}"
          method="post">
      @csrf
      <div class="form-group">
        <label for="title" class="font-weight-bold">Title</label>
        <input type="text" class="form-control" id="title" name="title"
               value="{{old('title')}}"
        >
{{--        //function old cho ta lấy lại dữ liệu trong  session tại vị trí title--}}
      </div>

      <div class="form-group">
        <label for="author" class="font-weight-bold">Author</label>
        <input type="text" class="form-control" id="author" name="author"
               value="{{old('author')}}"
        >
      </div>

      <div class="form-group">
        <label for="pages" class="font-weight-bold">Pages</label>
        <input type="number" class="form-control" id="pages" name="pages"
               value="{{old('pages')}}"
        >
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
