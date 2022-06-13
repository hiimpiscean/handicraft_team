<input type="hidden" name="id" value="{{old('id_cate')?? $category->id_cate}}">
<div class="form-group">
  <label for="name_cate" class="font-weight-bold">Name</label>
  <input type="text" class="form-control" id="name_cate" name="name_cate" value="{{old('name_cate')?? $category->name_cate}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="image_cate" class="font-weight-bold">Image</label>
  <input type="file" accept="image/*" class="form-control" id="file" name="file" min="0" value="{{old('image_cate')?? $category->image_cate}}">
    <img id='tempimage' src="#" style='max-width:300px; max-height:300px'>
</div>

