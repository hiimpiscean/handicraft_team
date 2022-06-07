@extends('masters.studentMaster')
@section('main')
  <div class=" container">
    <h1 class="display-4"> Are you sure you want to delete?</h1>
    <dl class="row">
      <dt class="col-sm-3">ID</dt>
      <dd class="col-sm-9">{{$students['id']}}</dd>

      <dt class="col-sm-3">Name</dt>
{{--      Student nay la student o dong  ['students' => $deleteStudent]); --}}
      <dd class="col-sm-9">{{$students['name']}}</dd>

      <dt class="col-sm-3">Email</dt>
      <dd class="col-sm-9">{{$students['email']}}</dd>

      <dt class="col-sm-3">Contact</dt>
      <dd class="col-sm-9">{{$students['contact']}}</dd>
    </dl>


    <form action="{{route('studentManager.destroy' , ['id' => $students['id']])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$students['id']}}">
      <button type="submit" class="btn btn-danger"> Delete </button>
      <a href="{{route('studentManager.index')}}" class="btn btn-info"> Cancel</a>
    </form>
  </div>
@endsection
