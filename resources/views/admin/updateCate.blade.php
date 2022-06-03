@extends('masters.adminMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Category</h1>


    @include('partials.errors')

    <form action="{{route('admin.update', ['id' => old('id_cate')?? $admin->id_cate])}}" method="post">
      @csrf
      @include('admin.cateFields')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
