@extends('masters.hanUiMaster')
@section('main')
{{--/////////////////////////////////////////////////--}}

<style>

  .boy{
    margin-right: 100px;
    margin-left: 90px;
    margin-top: 50px;
    /*border: solid 1px red;*/
    width: 85%;

  }

  .but{
    margin: 30px 20px 40px 300px;
    /*border : solid 1px red;*/

  }
  .cancel{
    margin-left: 400px;
  }

</style>

@include('partials.errors')
<form action="{{route('customer.store')}}" method="post">


<input type="hidden" name="id_c" value="{{old('id_c')?? $customer->id_c}}">

<div class="container boy">
  <div class="p-2 pt-md-4 pb-md-3 mx-auto text-center">
  </div>
  <div class="row">

    <div class="col-md-8 offset-2">
      <div class="row">
        <div class="col-md-6 mb-3 form-group">
          <label for="firstName">Full Name</label>
          <input type="text" class="form-control" id="fullName_c" name="fullName_c" value="{{old('fullName_c')?? $customer->fullName_c}}">
        </div>
        <div class="col-md-6 mb-3 form-group">
          <label for="lastName">DOB</label>
          <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $customer->dob}}">
        </div>
      </div>



      <div class="mb-3 form-group">
{{--  <div class="dropdown show">--}}


        <label for="gender">Gender</label>
        <input type="text" class="form-control " id="gender" name="gender" value="{{old('gender')?? $customer->gender}}">
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
  </div>



      {{--      ///////////////////////////////////////////////////////////////--}}
      <div class="mb-3">
        <label for="email">Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" id="email_c" name="email_c" value="{{old('email_c')?? $customer->email_c}}">
        </div>
      </div>

      <div class="mb-3 form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address_c" name="address_c" value="{{old('address_c')?? $customer->address_c}}">
      </div>

      <div class="mb-3 form-group">
        <label for="phone_c">Phone</label>
        <input type="text" class="form-control" id="phone_c" name="phone_c" value="{{old('phone_c')?? $customer->phone_c}}">
      </div>
    </div>
  </div>
</div>
{{--//////////////////////////////////////////--}}



      @csrf
{{--      @include('customerWithRepos.customerFields')--}}

<div class="but">
{{--        <button type="submit" class="btn btn-dark">Submit</button>--}}
   <div class="btn_box">
                <button type="submit" class="btn btn-dark">
                  Register Now
                </button>
              </div>

      </div>

    </form>

{{--//////////////////////////////////////////--}}
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +84 123456789
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  minh@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Handicraft
            </a>
            <p>
              The brand is present worldwide with 1000 facilities and has been growing since 1972.
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            6.00 Am -11.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Copyright belongs to
          <a href="#">NVM Handicraft</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="#" target="_blank">Handicraft Shop</a>
        </p>
      </div>
    </div>
  </footer>

@endsection
@section('script')
@endsection


{{--
@extends('masters.hanMaster')
@section('main')


  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Registered customers
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Full Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Your Address" />
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Register Now
                </button>
              </div>
            </form>
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
@endsection
@section('script')
@endsection
--}}
