@extends('masters.bookMaster1')

@section('main')


  <div class="container">
    <h1 class="display-4">Book Details</h1>
    @include('bookworm.bookWithRepos.bookDetails')
{{--   dùng một partials view để tái sử dụng--}}
    <a type="button" href="{{route('book.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
