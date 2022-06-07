<dl class="row">
  <dt class="col-sm-3">id</dt>
  <dd class="col-sm-9">{{ $category->id_cate }}</dd>

  <dt class="col-sm-3">name</dt>
  <dd class="col-sm-9">{{ $category->name_cate }}</dd>



  <dt class="col-sm-3">Image</dt>

  <img class="col-sm-9 " src="{{asset('images/category/'. $category->image_cate)}}" width="120" height="290" alt="" >


</dl>
