@extends('masters.categoryMaster')

@section('main')

    <div class="container">
        <h1 class="display-4">Category Details</h1>
        @include('category.cateDetails')
        <a type="button" href="{{route('category.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
    </div>
@endsection
