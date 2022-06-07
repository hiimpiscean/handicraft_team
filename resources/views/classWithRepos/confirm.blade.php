@extends('masters.classMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('classWithRepos.classDetails')

    <form action="{{route('class.destroy', ['id' =>$class->id])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$class->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('class.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
