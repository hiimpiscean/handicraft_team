@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Handicraft</h1>
    @include('handicraftWithRepos.sessionmessage')
    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price(VND)</th>
        <th scope="col">Category</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>

      @foreach($product as $p)
        <tr>

          <td>{{$p->name_p}}</td>
          <td>
            <a href="{{route('handicraft.show', ['id_p' =>$p->id_p])}}">
              <img src="{{asset('images/handicraf/'. $p->image_p)}}" alt="" style="width: 30%">
            </a>
          </td>
          <td>{{$p->price_p}}</td>
          <td>{{$p->categoryName}}</td>
          <td><a type="button" class="btn btn-primary btn-sm"
                 href="{{route('handicraft.show', ['id_p' => $p->id_p])}}"
            >Details</a>
          </td>
          <td><a type="button" class="btn btn-success btn-sm"
                 href="{{route('handicraft.edit', ['id_p' => $p->id_p])}}"
            >Edit</a>
          </td>
          <td>

            <a type="button" class="btn btn-danger btn-sm"
               href="{{route('handicraft.confirm', ['id_p' => $p->id_p])}}"
            >Delete</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

  </div>

@endsection

@section('script')
@endsection
