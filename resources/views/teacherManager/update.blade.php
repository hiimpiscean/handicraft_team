@extends('masters.bookMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Book</h1>

    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}

    @include('partials.errors')

    <form action="{{route('teacherManager.update', ['id' => old('id')?? $teacher['id']])}}" method="post">
      @csrf

      <input type="hidden" name="id" value="{{old('id')?? $teacher['id']}}">
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               value="{{old('name')?? $teacher['name']}}"
{{--            name là name của dòng này: $teacher['name'] = $request->input('name');   --}}
        >
        {{--        when removing title value to trigger "required" validation, --}}
        {{--        old('title') is not set so $book['title'] is shown--}}
        {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
      </div>

      <div class="form-group">
        <label for="dob" class="font-weight-bold">Dob</label>
        <input type="text" class="form-control" id="dob" name="dob" value="{{old('dob')?? $teacher['dob']}}">
      </div>

      <div class="form-group">
        <label for="ssid" class="font-weight-bold">SSID</label>
        <input type="number" class="form-control" id="ssid" name="ssid" value="{{old('ssid')?? $teacher['ssid']}}">
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
