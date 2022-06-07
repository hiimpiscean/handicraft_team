@extends('masters.teacherMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">New Teacher</h1>

    @include('partials.errors')

    <form
      action="{{route('teacherManager.store')}}"
      method="post">
      @csrf
      <div class="form-group">
        <label for="namee">Name</label>
        <input type="text" class="form-control" id="namee" name="name"
               value="{{old('name')}}"
        >
      </div>

      <div class="form-group">
        <label for="dobb">DOB</label>
        <input type="text" class="form-control" id="dobb" name="dob"
               value="{{old('dob')}}"
        >
      </div>

      <div class="form-group">
        <label for="ssidd">SSID</label>
        <input type="text" class="form-control" id="ssidd" name="ssid"
               value="{{old('ssid')}}"
        >
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
