@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Customer Index</h1>
    @include('customerWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>

        <th scope="col">FullName</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
{{--        <th scope="col">&nbsp;</th>--}}
      </tr>
      </thead>
      <tbody>
      @foreach($customer as $c)
        <tr>
          <td>{{$c->fullName_c}}</td>
          <td>{{$c->phone_c}}</td>
          <td>{{$c->email_c}}</td>
          <td>{{$c->address_c}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('customer.show', ['id_c' => $c->id_c])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('customer.edit', ['id_c' => $c->id_c])}}"
            >Edit</a>
          </td>
{{--          <td>--}}
{{--            <a type="button" class="btn btn-danger btn-sm"--}}
{{--               href="{{route('customer.confirm', ['id_c' => $c->id_c])}}"--}}
{{--            >Delete</a></td>--}}
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
