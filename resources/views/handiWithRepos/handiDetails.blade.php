<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9">{{ $product->id_p }}</dd>

    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $product->name_p }}</dd>

    <dt class="col-sm-3">Image</dt>
    <dd class="col-sm-9">{{ $product->image_p }}</dd>

    <dt class="col-sm-3">Price</dt>
    <dd class="col-sm-9">{{ $product->price_p }}</dd>

    <dt class="col-sm-3">Size</dt>
    <dd class="col-sm-9">{{$product->size_p }}</dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{$product->description_p }}</dd>

    <dt class="col-sm-3">Category</dt>
    <dd class="col-sm-9">{{$product->categoryId }}</dd>

</dl>

{{--'id' => $request->input('id'),--}}
{{--'name' => $request->input('name'),--}}
{{--'image' => $request->input('image'),--}}
{{--'price' => $request->input('price'),--}}
{{--'size' => $request->input('size'),--}}
{{--'description' => $request->input('description'),--}}
{{--'category' => $request->input('category'),--}}
