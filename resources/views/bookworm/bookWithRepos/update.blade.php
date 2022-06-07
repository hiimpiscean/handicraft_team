@extends('masters.bookMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Book</h1>


    @include('partials.errors')

    <form action="{{route('book.update', ['id' => old('id')?? $book->id])}}" method="post">
{{--      post về book.update --}}
{{--      ['id' => old('id')?? $book->id] : ta có thể lấy từ hai nơi 1 là từ session ,2 là từ modal --}}
      @csrf
      @include('bookworm.bookWithRepos.bookFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
