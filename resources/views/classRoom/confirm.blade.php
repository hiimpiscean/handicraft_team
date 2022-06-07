@extends('masters.classMaster')
@section('main')
  <div class=" container">
    <h1 class="display-4"> Are you sure you want to delete?</h1>
    <dl class="row">
      <dt class="col-sm-3">ID</dt>
      <dd class="col-sm-9">{{$class['id']}}</dd>

      <dt class="col-sm-3">Name</dt>
      <dd class="col-sm-9">{{$class['name']}}</dd>

      <dt class="col-sm-3">Date</dt>
      <dd class="col-sm-9">{{$class['date']}}</dd>

      <dt class="col-sm-3">Size</dt>
      <dd class="col-sm-9">{{$class['size']}}</dd>
    </dl>


    <form action="{{route('classRoom.destroy' , ['id' => $class['id']])}}" method="post">
      @csrf
      {{--      thêm method Delete--}}
      {{--      @method('DELETE')--}}
      <input type="hidden" name="id" value="{{$class['id']}}">
      <button type="submit" class="btn btn-danger" > Delete </button>
      <a href="{{route('classRoom.index')}}" class="btn btn-info"> Cancel</a>
    </form>
  </div>
@endsection
