@extends('masters.handicraftMasterwithRepos')

@section('main')

  <style>

    .but{
      margin: 30px 20px 40px 280px;

    }
    .cancel{
      margin-left: 400px;
    }
    .han{
      margin-top: 50px;
    }
  </style>

  <div class="container">
    <div class="han">
    <h1 class="display-4 text-center">Are you sure you want to delete?</h1>
    </div>
    @include('handicraftWithRepos.handicraftDetails')
    <form action="{{route('handicraft.destroy', ['id_p' =>$product->id_p])}}" method="post">
      @csrf
      <input type="hidden" name="id_p" value="{{$product->id_p}}">

      <button type="submit" class="btn btn-danger but">Delete</button>

      <a href="{{route('handicraft.index')}}" class="btn btn-info cancel">Cancel</a>
    </form>
  </div>
@endsection
