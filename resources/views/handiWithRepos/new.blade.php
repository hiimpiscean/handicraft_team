@extends('masters.handiMasterRepos')

@section('main')
    <div class="container">
        <h1 class="display-4"> Product</h1>
        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
        @include('partials.errors')

        <form action="{{route('handi.store')}}" method="post">
            @csrf
            @include('handiWithRepos.handiFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
