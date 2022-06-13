@extends('masters.categoryMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">New Category</h1>
        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
        @include('partials.errors')

        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" runat="server">
            @csrf
            @include('category.cateFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        document.getElementById('file').onchange = function () {
            var src = URL.createObjectURL(this.file[0])
            document.getElementById('tempimage').src = src
        }
    </script>
@endsection
