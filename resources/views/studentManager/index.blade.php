@extends('masters.studentMaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Student Manager</h1>

    <table class="table table-hover">
      <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
      </tr>
      </thead>
      <tbody>
      @foreach($students as $s)
        <tr>
          <th scope="row">{{$s['id']}}</th>
          <td>{{$s['name']}}</td>
          <td>{{$s['email']}}</td>
          <td>{{$s['contact']}}</td>
          <td><a type="button" class="btn btn-success btn-sm"
                               href="{{route('studentManager.edit', ['id' => $s['id']])}}"
            >Edit</a></td>
          <td><a type="button" class="btn btn-danger btn-sm"

{{--                 data-student="{{join('|',$s)}}"--}}

{{--                 data-toggle="modal" data-target="#deleteBook"--}}
                 href="{{route('studentManager.confirm', ['id' => $s['id']])}}"

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
                  <label for="name">Title</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                  <label for="email">Author</label>
                  <input type="text" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                  <label for="contact">Pages</label>
                  <input type="number" class="form-control" id="contact" name="contact">
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
     $('a[data-student]').on('click',function(evt){
       let tData = $(this).attr('data-student').split("|");
       console.log(tData);
       $('#id').attr('value',tData[0]);
       $('#name').attr('value',tData[1]);
       $('#email').attr('value',tData[2]);
       $('#contact').attr('value',tData[3]);

       $('#deleteForm').attr('action',tData[4]);
     });
   });

 </script>
@endsection
