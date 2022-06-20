@extends('masters.hanMaster')
@section('main')


  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Registration form
        </h2>
        <h6>Let's join us today!</h6>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{route('han.store')}}" method="post">
              @csrf
              <input type="hidden" name="id_c" value="{{old('id_c')?? $customer->id_c}}">
              <div>
                <input type="text" class="form-control" id="fullName_c" name="fullName_c" value="{{old('fullName_c')?? $customer->fullName_c}}" placeholder="Full Name" />
              </div>
              <div>
                <input type="date" class="form-control"  id="dob" name="dob" value="{{old('dob')?? $customer->dob}}">
              </div>
              <div>
                <select id="gender" name="gender" {{--value="{{old('gender')?? $customer->gender}}"--}}>
                  <option value="nam">Male</option>
                  <option value="nu">Female</option>
                  <option value="khac">Other</option>
                </select>
              </div>

              <div>
                <input type="text" class="form-control" placeholder="Phone Number" id="phone_c" name="phone_c" value="{{old('phone_c')?? $customer->phone_c}}"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" id="email_c" name="email_c" value="{{old('email_c')?? $customer->email_c}}"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Your Address" id="address_c" name="address_c" value="{{old('address_c')?? $customer->address_c}}"/>
              </div>

{{--              <div>--}}
{{--                <select class="form-control nice-select wide">--}}
{{--                  <option value="" disabled selected>--}}
{{--                    How many persons?--}}
{{--                  </option>--}}
{{--                  <option value="">--}}
{{--                    2--}}
{{--                  </option>--}}
{{--                  <option value="">--}}
{{--                    3--}}
{{--                  </option>--}}
{{--                  <option value="">--}}
{{--                    4--}}
{{--                  </option>--}}
{{--                  <option value="">--}}
{{--                    5--}}
{{--                  </option>--}}
{{--                </select>--}}
{{--              </div>--}}

              <div class="btn_box">
                <button type="submit" >
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
