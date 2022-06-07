@extends('masters.classMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">New Class</h1>

    @include('partials.errors')

    <form
      action="{{route('classRoom.store')}}"
      method="post">
      @csrf
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               value="{{old('name')}}"
        >
      </div>

      <div class="form-group">
        <label for="date" class="font-weight-bold">Date</label>
        <input type="text" class="form-control" id="date" name="date"
               value="{{old('date')}}"
        >
      </div>

      <div class="form-group">
        <label for="size" class="font-weight-bold">Size</label>
        <input type="number" class="form-control" id="size" name="size"
               value="{{old('size')}}"
        >
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
