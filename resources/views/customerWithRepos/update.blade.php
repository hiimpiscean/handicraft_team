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
    <h1 class="display-4 text-center han">Update An Existing Customer</h1>


    @include('partials.errors')

    <form action="{{route('customer.update', ['id_c' => old('id_c')?? $customer->id_c])}}" method="post">
      @csrf
      @include('customerWithRepos.customerFields')

      <button type="submit" class="btn btn-dark but">Submit</button>
      <a href="{{route('customer.index')}}" class="btn btn-info cancel">Cancel</a>
    </form>
  </div>
@endsection
