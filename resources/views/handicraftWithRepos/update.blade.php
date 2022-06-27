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
    <h1 class="display-4  text-center han ">Update Handicraft</h1>
    @include('partials.errors')
    <form action="{{route('handicraft.update', ['id_p' => old('id_p')?? $product->id_p])}}" method="post">
      @csrf
      @include('handicraftWithRepos.handicraftFields')
<div class="but">
      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('handicraft.index')}}" class="btn btn-info cancel" >Cancel</a>
</div>
    </form>
  </div>
@endsection
