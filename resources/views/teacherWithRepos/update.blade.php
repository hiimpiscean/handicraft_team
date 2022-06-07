@extends('masters.teacherMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Teacher</h1>


    @include('partials.errors')

    <form action="{{route('teacher.update', ['id' => old('id')?? $teacher->id])}}" method="post">
      @csrf
      @include('teacherWithRepos.teacherFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
