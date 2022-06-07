@extends('masters.bookMaster1')
@section('main')
  <div class=" container">
    <h1 class="display-4"> Are you sure you want to delete?</h1>
    <dl class="row">
      <dt class="col-sm-3">ID</dt>
      <dd class="col-sm-9">{{$book['id']}}</dd>

      <dt class="col-sm-3">Title</dt>
      <dd class="col-sm-9">{{$book['title']}}</dd>

      <dt class="col-sm-3">Author</dt>
      <dd class="col-sm-9">{{$book['author']}}</dd>

      <dt class="col-sm-3">Pages</dt>
      <dd class="col-sm-9">{{$book['pages']}}</dd>
    </dl>


    <form action="{{route('book.destroy' , ['id' => $book['id']])}}" method="post">
      @csrf
{{--      thêm method Delete--}}
{{--      @method('DELETE')--}}
      <input type="hidden" name="id" value="{{$book['id']}}">
      <button type="submit" class="btn btn-danger" > Delete </button>
      <a href="{{route('book.index')}}" class="btn btn-info"> Cancel</a>
    </form>
  </div>

@endsection
