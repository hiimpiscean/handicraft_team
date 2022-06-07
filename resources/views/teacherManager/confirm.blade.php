@extends('masters.bookMaster1')
@section('main')
  <div class=" container">
    <h1 class="display-4"> Are you sure you want to delete?</h1>
    <dl class="row">
      <dt class="col-sm-3">ID</dt>
      <dd class="col-sm-9">{{$teacher['id']}}</dd>

      <dt class="col-sm-3">Name</dt>
      <dd class="col-sm-9">{{$teacher['name']}}</dd>

      <dt class="col-sm-3">DOB</dt>
      <dd class="col-sm-9">{{$teacher['dob']}}</dd>

      <dt class="col-sm-3">SSID</dt>
      <dd class="col-sm-9">{{$teacher['ssid']}}</dd>
    </dl>


    <form action="{{route('teacherManager.destroy' , ['id' => $teacher['id']])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$teacher['id']}}">
      <button type="submit" class="btn btn-danger"> Delete </button>
      <a href="{{route('teacherManager.index')}}" class="btn btn-info"> Cancel</a>
    </form>
  </div>
@endsection
