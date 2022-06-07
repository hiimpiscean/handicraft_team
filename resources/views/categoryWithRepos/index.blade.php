@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Category</h1>
    @include('categoryWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        {{--        <th scope="col">#</th>--}}
        <th scope="col">Name</th>
        <th scope="col">Image</th>

        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($category as $c)
        <tr>

          <td>{{$c->name_cate}}</td>

          <td>
              <a href="{{route('category.show', ['id_cate' =>$c->id_cate])}}">
            <img src="{{asset('images/category/'. $c->image_cate)}}" alt="" style="width: 30%">
              </a>
          </td>

          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('category.show', ['id_cate' => $c->id_cate])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('category.edit', ['id_cate' => $c->id_cate])}}"
            >Edit</a>
          </td>
          <td>
            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('category.confirm', ['id_cate' => $c->id_cate])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>
@endsection

@section('script')
@endsection
