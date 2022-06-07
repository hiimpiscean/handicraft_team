@if (\Illuminate\Support\Facades\Session::get('msg') != null)
{{--  lấy thông tin tai vị trí get('msg') nếu mà nó khác null(là có thông tin)
thì ta sẽ hiên thị ra cục div--}}
  {{--  https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{\Illuminate\Support\Facades\Session::get('msg')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
