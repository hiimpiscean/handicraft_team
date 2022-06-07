<input type="hidden" name="id" value="{{old('id')?? $book->id}}">
<div class="form-group">
  <label for="title" class="font-weight-bold">Title</label>
  <input type="text" class="form-control" id="title" name="title"
         value="{{old('title')?? $book->title}}">
  {{--        when removing title value to trigger "required" validation, --}}
  {{--        old('title') is not set so $book['title'] is shown--}}
  {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
  <label for="author" class="font-weight-bold">Author</label>
  <input type="text" class="form-control" id="author" name="author"
         value="{{old('author')?? $book->author}}">
{{--  nếu mà chưa có trong session thì chúng ta sẽ lấy từ controller--}}
</div>

<div class="form-group">
  <label for="pages" class="font-weight-bold">Pages</label>
  <input type="number" class="form-control" id="pages" name="pages" min="0" value="{{old('pages')?? $book->pages}}">
</div>


@php
  $pId = old('publisher') ?? $book->publisherId?? null;

@endphp
{{--lấy từ old nếu như validation kick hoạt còn ko ta sẽ phải lấy từ modal--}}
{{--1 là từ session 2 là từ controller 3 là ko có gì --}}


<div class="form-group">
  <label for="publisher" class="font-weight-bold">Publisher</label>
  <select name="publisher" class="form-control" id="publisher" >
    <option value="0">Please select a publisher :)</option>
{{--    id của pub bắt đầu từ 1 nên ta cho value bằng 0--}}
{{--    là dropdown ta phải dùng select và option--}}
    @foreach($publishers as $p)
      <option value="{{ $p->id }}"
{{--              option có value là pid--}}
        {{ ($pId != null && $p->id == $pId) ? 'selected' : '' }}
{{--        check nếu pId khác null và p id của option này bằng pid của người ta đã chọn --}}
      >{{ $p->name }}</option>
{{--      còn in ra web là p name--}}

    @endforeach
  </select>
</div>
