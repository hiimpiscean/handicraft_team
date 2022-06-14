<input type="hidden" name="id" value="{{old('id')?? $product->id_p}}">

<div class="form-group">
    <label for="name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $product->name_p}}">
</div>


<div class="form-group">
    <label for="image" class="font-weight-bold">Image</label>
    <input type="text" class="form-control" id="image" name="image" value="{{old('image')?? $product->image_p}}">
</div>


<div class="form-group">
    <label for="price" class="font-weight-bold">Price</label>
    <input type="number" class="form-control" id="price" name="price" value="{{old('price')?? $product->price_p}}">
</div>



<div class="form-group">
    <label for="size" class="font-weight-bold">Size</label>
    <input type="number" class="form-control" id="size" name="size" min="0" value="{{old('size')?? $product->size_p}}">
</div>

{{--<div class="form-group">--}}
{{--  <label for="description" class="font-weight-bold">Description</label>--}}
{{--  <input type="text" class="form-control" id="description" name="description" value="{{old('description')?? $product->description_p}}">--}}
{{--</div>--}}


<div class="form-group">
    <label for="category" class="font-weight-bold">Category</label>
    <input type="number" class="form-control" id="category" name="category" min="0" value="{{old('category')?? $product->categoryId}}">
</div>


{{--<td>--}}
{{--  <a href="{{route('category.show', ['id_cate' =>$c->id_cate])}}">--}}
{{--    <img src="{{asset('images/category/'. $c->image_cate)}}" alt="" style="width: 30%">--}}
{{--  </a>--}}
{{--</td>--}}
{{--'id' => $request->input('id'),--}}
{{--'name' => $request->input('name'),--}}
{{--'image' => $request->input('image'),--}}
{{--'price' => $request->input('price'),--}}
{{--'size' => $request->input('size'),--}}
{{--'description' => $request->input('description'),--}}
{{--'category' => $request->input('category'),--}}
