@extends('masters.studentMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Student Index</h1>
    @include('studentWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      {{--      mỗi phần tử b trong book là một object
            lớp Object là lớp cha của tất cả các lớp trong java--}}
      @foreach($students as $s)
        <tr>
          {{--          Lấy thông tin trong object ta dùng dấu mũi tên  "$b->title" --}}
          <td>{{$s->name}}</td>
          <td>{{$s->email}}</td>
          <td>{{$s->contact}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('student.show', ['id' => $s->id])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('student.edit', ['id' => $s->id])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('student.confirm', ['id' => $s->id])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
