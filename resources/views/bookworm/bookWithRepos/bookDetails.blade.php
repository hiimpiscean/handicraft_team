<dl class="row">
{{--  dl: document List--}}
  <dt class="col-sm-3">ID</dt>
{{--  dt: document titel--}}
  <dd class="col-sm-9">{{ $book->id }}</dd>
{{--  {{ $book->id }} : từ controller lên  --}}
{{--document data--}}
  <dt class="col-sm-3">Title</dt>
  <dd class="col-sm-9">{{ $book->title }}</dd>

  <dt class="col-sm-3">Author</dt>
  <dd class="col-sm-9">{{ $book->author }}</dd>

  <dt class="col-sm-3">Pages</dt>
  <dd class="col-sm-9">{{$book->pages }}</dd>

  <dt class="col-sm-3">Publisher</dt>
  <dd class="col-sm-9">{{$publisher->name }}</dd>

</dl>
