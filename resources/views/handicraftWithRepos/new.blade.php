@extends('masters.handicraftMasterwithRepos')


<style>

  .but{
    margin: 30px 20px 40px 280px;
    /*border : solid 1px red;*/

  }
  .cancel{
    margin-left: 400px;
    margin-bottom: 20px;
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
@section('main')
  <div class="container">
    <h1 class="display-4 text-center han">New Handicraft</h1>

    @include('partials.errors')

    <form action="{{route('handicraft.store')}}" method="post">
      @csrf
      @include('handicraftWithRepos.handicraftFieldsNew')
      <div class="but">
      <button type="submit" class="btn btn-dark">Submit</button>
      <a href="{{route('handicraft.index')}}" class="btn btn-info cancel" >Cancel</a>
      </div>
    </form>
  </div>
@endsection
