@extends('masters.adminMaster')

@section('main')


  <div class="container">
    <h1 class="display-4">Book Details</h1>
    @include('admin.cateDetails')
    <a type="button" href="{{route('admin.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
