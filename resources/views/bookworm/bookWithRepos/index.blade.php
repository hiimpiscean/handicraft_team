@extends('masters.bookMaster1')

@section('main')
  <div class="container">
    <h1 class="display-4">Book Index</h1>
    @include('bookworm.bookWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Pages</th>
        <th scope="col">Publisher</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($books as $b)
        <tr>
          <td>{{$b->title}}</td>
          <td>{{$b->author}}</td>
          <td>{{$b->pages}}</td>
          <td>{{$b->publisherName}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('book.show', ['id' => $b->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('book.edit', ['id' => $b->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('book.confirm', ['id' => $b->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
