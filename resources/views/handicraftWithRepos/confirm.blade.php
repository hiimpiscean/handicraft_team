@extends('masters.handicraftMasterwithRepos')

@section('main')

  <style>

    .but{
      margin: 30px 20px 40px 280px;
      /*border : solid 1px red;*/

    }
    .cancel{
      margin-left: 400px;
    }
    /*.cancel{*/
    /*  margin: 0 700px 200px ;*/
    /*  border : solid 1px red;*/
    /*}*/
    .han{
      margin-top: 50px;
      /*margin-bottom: 5px;*/
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
