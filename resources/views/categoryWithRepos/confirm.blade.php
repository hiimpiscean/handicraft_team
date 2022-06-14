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
    <h1 class="display-4 text-center han">Are you sure you want to delete?</h1>
    @include('categoryWithRepos.categoryDetails')

    <form action="{{route('category.destroy', ['id_cate' =>$category->id_cate])}}" method="post">
      @csrf
      <input type="hidden" name="id_cate" value="{{$category->id_cate}}">
      <button type="submit" class="btn btn-danger but">Delete</button>
      <a href="{{route('category.index')}}" class="btn btn-info cancel">Cancel</a>
    </form>
  </div>
@endsection
