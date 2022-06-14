@extends('masters.handiMasterRepos')

@section('main')


    <div class="container">
        <h1 class="display-4">Teacher Details</h1>
        @include('handiWithRepos.handiDetails')
        <a type="button" href="{{route('handi.index')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
    </div>
@endsection
