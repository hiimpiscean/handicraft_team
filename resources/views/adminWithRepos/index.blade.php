@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Admin Index</h1>
    @include('adminWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>

        <th scope="col">Username</th>
        <th scope="col">fullName</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
{{--        <th scope="col">password</th>--}}
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
{{--        <th scope="col">&nbsp;</th>--}}
      </tr>
      </thead>
      <tbody>
      @foreach($admin as $a)
        <tr>
          <td>{{$a->username}}</td>
          <td>{{$a->fullName_a}}</td>
          <td>{{$a->phone_a}}</td>
          <td>{{$a->email_a}}</td>
{{--          <td>{{$a->password}}</td>--}}
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('admin.show', ['id_a' => $a->id_a])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('admin.edit', ['id_a' => $a->id_a])}}"
            >Edit</a>
          </td>

        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
