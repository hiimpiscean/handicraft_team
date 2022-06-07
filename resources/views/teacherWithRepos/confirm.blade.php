@extends('masters.teacherMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('teacherWithRepos.teacherDetails')

    <form action="{{route('teacher.destroy', ['id' =>$teacher->id])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$teacher->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('teacher.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
