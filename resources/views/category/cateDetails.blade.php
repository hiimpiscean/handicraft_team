<dl class="row">
  <dt class="col-sm-3">ID</dt>
  <dd class="col-sm-9">{{ $category->id_cate }}</dd>

  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{ $category->name_cate }}</dd>

  <dt class="col-sm-3">Image</dt>
  <dd class="col-sm-9"><img src="{{ asset('/storage/category/'.$category->image_cate) }}" style='max-width:300px; max-height:300px'></dd>

</dl>
