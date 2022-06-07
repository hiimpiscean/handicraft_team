<input type="hidden" name="id_c" value="{{old('id_c')?? $customer->id_c}}">
<div class="form-group">
  <label for="fullName_c" class="font-weight-bold">Full Name</label>
  <input type="text" class="form-control" id="fullName_c" name="fullName_c" value="{{old('fullName_c')?? $customer->fullName_c}}">
</div>

<div class="form-group">
  <label for="phone_c" class="font-weight-bold">Phone</label>
  <input type="text" class="form-control" id="phone_c" name="phone_c" value="{{old('phone_c')?? $customer->phone_c}}">
</div>

<div class="form-group">
  <label for="email_c" class="font-weight-bold">Email</label>
  <input type="text" class="form-control" id="email_c" name="email_c" value="{{old('email_c')?? $customer->email_c}}">
</div>

<div class="form-group">
  <label for="address_c" class="font-weight-bold">Address</label>
  <input type="text" class="form-control" id="address_c" name="address_c" value="{{old('address_c')?? $customer->address_c}}">
</div>





