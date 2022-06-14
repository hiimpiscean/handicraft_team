@extends('masters.handiMasterRepos')

@section('main')
    <div class="container">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        @include('handiWithRepos.handiDetails')

        <form action="{{route('handi.destroy', ['id' => $product->id_p])}}" method="post">


            {{--      id phải là id_p--}}


            @csrf
            <input type="hidden" name="id" value="{{$product->id_p}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('handi.index')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
