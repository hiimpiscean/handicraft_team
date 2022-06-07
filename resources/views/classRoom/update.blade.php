@extends('masters.classMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update </h1>

    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}

    @include('partials.errors')

    <form action="{{route('classRoom.update', ['id' => old('id')?? $class['id']])}}" method="post">
      @csrf

      <input type="hidden" name="id"
             {{--             id là id từ  $student['id'] = count(Session::get('students')) + 1;--}}
             value="{{old('id')?? $class['id']}}"
      >
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               {{--               name là name của dòng này : $student['->   name   <- oke ? '] = $request->input('name');--}}
               value="{{old('name')?? $class['name']}}"
        >
        {{--        when removing title value to trigger "required" validation, --}}
        {{--        old('title') is not set so $book['title'] is shown--}}
        {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
      </div>

      <div class="form-group">
        <label for="date" class="font-weight-bold">Date</label>
        <input type="text" class="form-control" id="date" name="date"
               value="{{old('date')?? $class['date']}}"
        >
      </div>

      <div class="form-group">
        <label for="size" class="font-weight-bold">Size</label>
        <input type="number" class="form-control" id="size" name="size" value="{{old('size')?? $class['size']}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
