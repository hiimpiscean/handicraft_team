<style>

</style>
<dl class="row">

  <dt class="col-sm-3">ID</dt>

  <dd class="col-sm-9">{{ $product->id_p }}</dd>

  <dt class="col-sm-3">Name</dt>
  <dd class="col-sm-9">{{ $product->name_p }}</dd>

  <dt class="col-sm-3">Image</dt>

  <img class="col-sm-9 " src="{{asset('images/handicraf/'. $product->image_p)}}" width="120" height="290" alt="" >


  <dt class="col-sm-3">Price</dt>
  <dd class="col-sm-9">{{$product->price_p }}</dd>

  <dt class="col-sm-3">Size</dt>
  <dd class="col-sm-9">{{$product->size_p }}</dd>

  <dt class="col-sm-3">Description</dt>
  <dd class="col-sm-9">{{$product->description_p }}</dd>

  <dt class="col-sm-3">Category</dt>
  <dd class="col-sm-9">{{$category->name_cate }}</dd>

</dl>
