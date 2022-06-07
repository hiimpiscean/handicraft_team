@extends('masters.teacherMaster')
@section('main')
  <style>
    #classroom{
      text-align: center;
    }
  </style>
  <div class="container">
    <h1 class="display-4" id="classroom">TEACHER MANAGER</h1>

    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">DOB</th>
        <th scope="col">SSID</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($teacher as $t)
        <tr>
          <th scope="row">{{$t['id']}}</th>
          <td>{{$t['name']}}</td>
          <td>{{$t['dob']}}</td>
          <td>{{$t['ssid']}}</td>
          <td><a type="button" class="btn btn-success btn-sm"
                               href="{{route('teacherManager.edit', ['id' => $t['id']])}}"
            >Edit</a></td>
          <td><a type="button" class="btn btn-danger btn-sm"
                 href="{{route('teacherManager.confirm', ['id' => $t['id']])}}"
{{--                  data-teacher="{{join('|',$t)}}"--}}

{{--                 data-toggle="modal" data-target="#deleteBook"--}}
            >Delete</a></td>
        </tr>


      @endforeach
      </tbody>
    </table>

    <div class="modal fade" tabindex="-1" id="deleteBook" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Deleting A Teacher</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="deleteForm" method="post">





            @csrf
            <div class="modal-body">
              <fieldset disabled>
                <input type="hidden" id="id" name="id">

                <div class="form-group">
                  <label for="namee">Name</label>
                  <input type="text" class="form-control" id="namee" name="name">
                </div>

                <div class="form-group">
                  <label for="dobb">DOB</label>
                  <input type="text" class="form-control" id="dobb" name="dob">
                </div>

                <div class="form-group">
                  <label for="ssidd">SSID</label>
                  <input type="text" class="form-control" id="ssidd" name="ssid">
                </div>
              </fieldset>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Delete">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $('document').ready(function(){
      $('a[data-teacher]').on('click',function(evt){
        let tdata = $(this).attr('data-teacher').split("|");
        console.log(tdata);
        $('#id').attr('value',tdata[0]);
        $('#namee').attr('value',tdata[1]);
        $('#dobb').attr('value',tdata[2]);
        $('#ssidd').attr('value',tdata[3]);
        $('#deleteForm').attr('value',tdata[4]);
      });
    });

  </script>


@endsection
