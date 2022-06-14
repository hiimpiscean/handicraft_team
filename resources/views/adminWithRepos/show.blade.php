@extends('masters.handicraftMasterwithRepos')

@section('main')
  <style>

    .han{
      margin-top: 50px;
      /*margin-bottom: 5px;*/
    }
    .cancel{
      margin-left: 800px;
    }
  </style>

  <div class="container">
    <h1 class="display-4 text-center han ">Admin Details</h1>
    @include('adminWithRepos.adminDetails')
    <a type="button" href="{{route('admin.index')}}" class="btn btn-info cancel">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
