@extends('masters.handicraftMasterwithRepos')

@section('main')

  <style>

    .han{
      margin-top: 50px;
    }
    .cancel{
      margin-left: 800px;
    }
  </style>
  <div class="container">
    <h1 class="display-4 text-center han">Handicraft Details</h1>
    @include('handicraftWithRepos.handicraftDetails')

    <a type="button" href="{{route('handicraft.index')}}" class="btn btn-info cancel">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection
