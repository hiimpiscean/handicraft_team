@extends('masters.handiMasterRepos')

@section('main')
    <div class="container" >
        <h1 class="display-4">Handi Craft Manager</h1>
        {{--    @include('classWithRepos.sessionmessage')--}}
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                {{--        <th scope="col">#</th>--}}
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                {{--        <th scope="col">Description</th>--}}
                <th scope="col">Category</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                <tr>
                    <td>{{$p->name_p}}</td>
                    <td>{{$p->image_p}}</td>
                    <td>{{$p->price_p}}</td>
                    <td>{{$p->size_p}}</td>
                    {{--          <td>{{$p->description_p}}</td>--}}
                    <td>{{$p->categoryId}}</td>

                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('handi.show', ['id' => $p->id_p])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('handi.edit', ['id' => $p->id_p])}}"
                        >Edit</a>
                    </td>
                    <td>

                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('handi.confirm', ['id' => $p->id_p])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection

@section('script')
@endsection
