@extends('masters.adminMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('admin.cateDetails')

    <form action="{{route('admin.destroy', ['id_cate' =>$admin->id_cate])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$admin->id_cate}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
