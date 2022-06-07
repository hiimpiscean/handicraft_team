@extends('masters.studentMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">New Student</h1>

    @include('partials.errors')

    <form
      action="{{route('studentManager.store')}}"
      method="post">
      @csrf
      <div class="form-group">
        <label for="name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               value="{{old('name')}}"
        >
      </div>

      <div class="form-group">
        <label for="email" class="font-weight-bold">Email</label>
        <input type="text" class="form-control" id="email" name="email"
               value="{{old('email')}}"
        >
      </div>

      <div class="form-group">
        <label for="contact" class="font-weight-bold">Contact</label>
        <input type="number" class="form-control" id="contact" name="contact"
               value="{{old('contact')}}"
        >
      </div>

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
