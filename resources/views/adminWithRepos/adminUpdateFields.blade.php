<style>

  .boy{
    margin-right: 100px;
    margin-left: 105px;
    margin-top: 35px;
    /*border: solid 1px red;*/

    width: 75%;

  }
</style>

<div class="boy">
<input type="hidden" name="id_a" value="{{old('id_a')?? $admin->id_a}}">
{{--  (do laravel ko nhận biết được giá trị rỗng )nếu inout là null thì trường hợp old id_a sẽ bị bỏ qua thì sẽ lấy ở trong admin ->id_a--}}

<div class="form-group">
  <label for="username" class="font-weight-bold">User Name</label>
  <input type="text" class="form-control" id="username" name="username" value="{{old('username')?? $admin->username}}">
</div>

<div class="form-group">
  <label for="fullName_a" class="font-weight-bold">Full Name</label>
  <input type="text" class="form-control" id="fullName_a" name="fullName_a" value="{{old('fullName_a')?? $admin->fullName_a}}">
</div>


<div class="form-group">
  <label for="phone_a" class="font-weight-bold">Phone</label>
  <input type="number" class="form-control" id="phone_a" name="phone_a" min="0" value="{{old('phone_a')?? $admin->phone_a}}">
</div>

<div class="form-group">
  <label for="email_a" class="font-weight-bold">Email</label>
  <input type="text" class="form-control" id="email_a" name="email_a" value="{{old('email_a')?? $admin->email_a}}">
</div>

<div class="form-group">
  <label for="old_password" class="font-weight-bold">Old password</label>
  <input type="password" class="form-control" id="old_password" name="old_password" value="">
</div>

  <div class="form-group">
    <label for="new_password" class="font-weight-bold">New password</label>
    <input type="password" class="form-control" id="new_password" name="new_password" value="">
  </div>

  <div class="form-group">
    <label for="confirm_password" class="font-weight-bold">Confirm password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="">
  </div>

</div>
