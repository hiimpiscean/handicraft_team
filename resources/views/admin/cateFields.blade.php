<input type="hidden" name="id" value="{{old('id_cate')?? $admin->id_cate}}">
<div class="form-group">
  <label for="name_cate" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name_cate" name="name_cate" value="{{old('name_cate')?? $admin->name_cate}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="image_cate" class="font-weight-bold">Image</label>
  <input type="file" class="form-control" id="image_cate" name="image_cate" min="0" value="{{old('image_cate')?? $admin->image_cate}}">
</div>

