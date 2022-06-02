@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <h1 class="display-4">Admin</h1>
        @include('admin.sessionmessage')
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                {{--        <th scope="col">#</th>--}}
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $b)
                <tr>

                    <td>{{$b->name_cate}}</td>
                    <td>{{$b->image_cate}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('admin.show', ['id' => $b->id_cate])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.edit', ['id' => $b->id_cate])}}"
                        >Edit</a>
                    </td>
                    <td>

                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('admin.confirm', ['id' => $b->id_cate])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection
