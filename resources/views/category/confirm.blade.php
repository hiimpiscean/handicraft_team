@extends('masters.categoryMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('category.cateDetails')

        <form action="{{route('category.destroy', ['id' =>$category->id_cate])}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$category->id_cate}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('category.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
