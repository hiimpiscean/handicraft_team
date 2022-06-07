@extends('masters.bookMaster1')

@section('main')
  <div class="container">
    <h1 class="display-4">Book Index</h1>

    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Pages</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>


      @foreach($books as $b)
        <tr>
          <th scope="row">{{$b['id']}}</th>
          <td>{{$b['title']}}</td>
          <td>{{$b['author']}}</td>
          <td>{{$b['pages']}}</td>
          <td><a  type="button" class="btn btn-success btn-sm"
{{--                 vị trí id có giá trị là b[id]. 'id' phải trùng với Route::post('update/{id}' còn $b['id] la id của trong book--}}
                 href="{{route('book.edit', ['id' => $b['id']])}}"
            >Edit</a></td>
          <td><a type="button" class="btn btn-danger btn-sm"
                 href="{{route('book.confirm', ['id' => $b['id']])}}"
{{--                                  data-book="{{join('|', $b)}}"--}}
{{--                 data-book="{{join('|', $b) . "|" . route('book.destroy', ['id' => $b['id']])}}"--}}
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
            <h5 class="modal-title">Deleting A Book</h5>
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
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" class="form-control" id="author" name="author">
                </div>

                <div class="form-group">
                  <label for="pages">Pages</label>
                  <input type="number" class="form-control" id="pages" name="pages">
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
      $('a[data-book]').on('click', function (evt)
      {
        let bData = $(this).attr('data-book').split("|");
        console.log(bData);
        $('#id').attr('value', bData[0]);
        $('#title').attr('value', bData[1]);
        $('#author').attr('value', bData[2]);
        $('#pages').attr('value', bData[3]);

        $('#deleteForm').attr('action', bData[4]);
      });
    });
  </script>
@endsection
