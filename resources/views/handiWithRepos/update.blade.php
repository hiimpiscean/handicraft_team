@extends('masters.handiMasterRepos')

@section('main')
    <div class="container">
        <h1 class="display-4">Update A New Product</h1>


        @include('partials.errors')

        <form action="{{route('handi.update', ['id' => old('id')?? $product->id_p])}}" method="post">
            @csrf
            @include('handiWithRepos.handiFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
