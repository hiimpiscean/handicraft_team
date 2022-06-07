@extends('masters.classMasterWithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Book</h1>


    @include('partials.errors')

    <form action="{{route('class.update', ['id' => old('id')?? $class->id])}}" method="post">
      @csrf
      @include('classWithRepos.classFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
