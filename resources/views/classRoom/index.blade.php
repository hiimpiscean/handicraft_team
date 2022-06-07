@extends('masters.classMaster')
@section('main')
  <style>
    #classroom{
      text-align: center;
    }
  </style>
  <div class="container">
    <h1 class="display-4" id="classroom">CLASSROOM MANAGER</h1>

    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">Size</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
  <tbody>
  @foreach($class as $c)
    <tr>
      <th scope="row">{{$c['id']}}</th>
      <td>{{$c['name']}}</td>
      <td>{{$c['date']}}</td>
      <td>{{$c['size']}}</td>
      <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('classRoom.edit', ['id' => $c['id']])}}"
        >Edit</a></td>
      <td><a type="button" class="btn btn-danger btn-sm"


             href="{{route('classRoom.confirm', ['id' => $c['id']])}}"

        >Delete</a></td>
    </tr>


  @endforeach
  </tbody>
    </table>

    <div class="modal fade" tabindex="-1" id="deleteBook" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Deleting A Class</h5>
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
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                  <label for="date">Start Date</label>
                  <input type="text" class="form-control" id="date" name="date">
                </div>

                <div class="form-group">
                  <label for="size">Size</label>
                  <input type="number" class="form-control" id="size" name="size">
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
    $('document').ready(function () {
      // những cái đương link a nào có thuộc tính(attribue) là data-book
      $('a[data-class]').on('click', function (evt)
      {
        let cData = $(this).attr('data-class').split("|");
        console.log(cData);
        $('#id').attr('value', cData[0]);
        $('#name').attr('value', cData[1]);
        $('#date').attr('value', cData[2]);
        $('#size').attr('value', cData[3]);

        $('#deleteForm').attr('action', cData[4]);
      });
    });
  </script>
@endsection
