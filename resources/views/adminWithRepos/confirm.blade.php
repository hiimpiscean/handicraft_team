@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('adminWithRepos.adminDetails')

    <form action="{{route('admin.destroy', ['id_a' =>$admin->id_a])}}" method="post">
      @csrf
      <input type="hidden" name="id_a" value="{{$admin->id_a}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
