<input type="hidden" name="id" value="{{old('id')?? $class->id}}">
<div class="form-group">
  <label for="name" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $class->name}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="date" class="font-weight-bold">Start Date</label>
  <input type="text" class="form-control" id="date" name="date" value="{{old('date')?? $class->date}}">
</div>

<div class="form-group">
  <label for="size" class="font-weight-bold">Size</label>
  <input type="number" class="form-control" id="size" name="size" min="0" value="{{old('size')?? $class->size}}">
</div>

