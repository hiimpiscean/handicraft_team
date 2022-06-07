@extends('masters.testMaster')
@section('main')
  <div class="container">
    <h1 class="display-4">Test Controller</h1>


    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        <th scope="col">Pages</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
@foreach($tests as $t)
  <tr>
    <th scope="row">{{$t['id']}} </th>
    <td>{{$t['name']}}</td>
    <td>{{$t['author']}}</td>
    <td>{{$t['pages']}}</td>
    <td><a type="button" class="btn btn-success btn-sm">
        Edit</a></td>
    <td><a type="button" class="btn btn-danger btn-sm"
      data-thu="{{join('|',$t)}}"
           data-toggle="modal" data-target="#deleteBook"
      >Delete</a></td>

  </tr>
  @endforeach
      </tbody>
    </table>
    <div class="modal fade" tabindex="-1" id="deleteBook" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Deleting A Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="deleteForm" method="post">
  @csrf
  <div class="modal-body" >
    <fieldset disabled>
      <input type="hidden" id="id" name="id">
      <div class="form-group" >
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author">

      </div>
      <div class="form-group">
        <label for="pages"> Pages</label>
        <input type="text" class="form-control" id="pages" name="pages">
      </div>
    </fieldset>
  </div>
  <div class="modal-footer">
    <input type="submit" class="btn btn-primary" value="Delete">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button>
  </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('script')
  <script type ="text/javascript">
    $('document').ready(function(){
      $('a[data-thu]').on('click',function(evt){
        let tData = $(this).attr('data-thu').split('|');
        console.log(tData);
        $('#id').attr('value',tData[0]);
        $('#name').attr('value',tData[1]);
        $('#author').attr('value',tData[2]);
        $('#pages').attr('value',tData[3]);

        $('#deleteForm').attr('action',tData[4]);

      });
    });

  </script>
@endsection
