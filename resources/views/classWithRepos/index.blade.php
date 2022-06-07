@extends('masters.classMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Class Manager</h1>
    @include('classWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">Size</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($class as $c)
        <tr>
          <td>{{$c->name}}</td>
          <td>{{$c->date}}</td>
          <td>{{$c->size}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('class.show', ['id' => $c->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('class.edit', ['id' => $c->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('class.confirm', ['id' => $c->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
