<input type="hidden" name="id_a" value="{{old('id_a')?? $admin->id_a}}">

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
  <label for="password" class="font-weight-bold">Password</label>
  <input type="password" class="form-control" id="password" name="password" value="{{old('password')?? $admin->password}}">
</div>
