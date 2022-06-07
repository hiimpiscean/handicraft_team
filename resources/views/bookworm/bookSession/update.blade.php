@extends('masters.bookMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Book</h1>

    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}

    @include('partials.errors')

    <form action="{{route('book.update', ['id' => old('id')?? $book['id']])}}" method="post">
      @csrf

      <input type="hidden" name="id" value="{{old('id')?? $book['id']}}">
      <div class="form-group">
        <label for="title" class="font-weight-bold">Title</label>
{{--        ?? là nếu ko có thì sẽ lấy từ book--}}
        <input type="text" class="form-control" id="title" name="title"
               value="{{old('title')?? $book['title']}}">
        {{--        when removing title value to trigger "required" validation, --}}
        {{--        old('title') is not set so $book['title'] is shown--}}
        {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
      </div>

      <div class="form-group">
        <label for="author" class="font-weight-bold">Author</label>
        <input type="text" class="form-control" id="author" name="author"
               value="{{old('author')?? $book['author']}}">
      </div>

      <div class="form-group">
        <label for="pages" class="font-weight-bold">Pages</label>
        <input type="number" class="form-control" id="pages" name="pages"
               value="{{old('pages')?? $book['pages']}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
