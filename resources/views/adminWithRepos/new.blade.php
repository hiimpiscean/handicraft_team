@extends('masters.handicraftMasterwithRepos')

@section('main')
  <div class="container">
    <h1 class="display-4">New Admin</h1>

    @include('partials.errors')

    <form action="{{route('admin.store')}}" method="post">
      @csrf
      @include('adminWithRepos.adminFields')
      <button type="submit" class="btn btn-dark">Submit</button>
{{--      <a href="{{route('admin.index')}}" class="btn btn-info">Submit</a>--}}
      <a href="{{route('admin.index')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
