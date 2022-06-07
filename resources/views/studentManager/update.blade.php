@extends('masters.bookMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Book</h1>

    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}

    @include('partials.errors')

    <form action="{{route('studentManager.update', ['id' => old('id')?? $student['id']])}}" method="post">
      @csrf

      <input type="hidden" name="id"
{{--             id là id từ  $student['id'] = count(Session::get('students')) + 1;--}}
             value="{{old('id')?? $student['id']}}"
      >
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
{{--               name là name của dòng này : $student['->   name   <- oke ? '] = $request->input('name');--}}
               value="{{old('name')?? $student['name']}}"
        >
        {{--        when removing title value to trigger "required" validation, --}}
        {{--        old('title') is not set so $book['title'] is shown--}}
        {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
      </div>

      <div class="form-group">
        <label for="email" class="font-weight-bold">Author</label>
        <input type="text" class="form-control" id="email" name="email"
               value="{{old('email')?? $student['email']}}"
        >
      </div>

      <div class="form-group">
        <label for="contact" class="font-weight-bold">Pages</label>
        <input type="number" class="form-control" id="contact" name="contact" value="{{old('contact')?? $student['contact']}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
