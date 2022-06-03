@extends('masters.categoryMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Update An Existing Category</h1>


        @include('partials.errors')

        <form action="{{route('category.update', ['id' => old('id_cate')?? $category->id_cate])}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('category.cateFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
