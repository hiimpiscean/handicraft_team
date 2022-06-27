@extends('masters.hanUiMaster')

@section('main')
  {{--/////////////////////////////////////////////////--}}

  <style>
    /*  * {
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif ;
      }*/
    body {
      margin: 0;
      padding: 0;
      background: #f5d8c0;
    }

    .content {
      width: 1280px;
      max-width: 100%;
      margin: 0 auto;
    }


    .shadow-box {
      background: white;
    }

    p {
      padding: 0;
      margin: 0;
    }

    @media (min-width: 700px) {
      .shadow-box {
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
      }
    }

    .signup-wrapper .company-details {
      background: url(https://www.re-thinkingthefuture.com/wp-content/uploads/2021/05/A4086-Handicraft-from-Northeast-India.jpg);
      background-size: cover;
      position: relative;

    }

    .signup-wrapper .company-details:before {
      content: "";
      position: absolute;
      display: block;
      left: 0;
      right: 0;
      bottom: 0;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0) 100%);
    }


    .signup-wrapper .company-details .wrapper-1 {
      position: relative;
      padding-bottom: 10px;
      padding-top: 22px;

    }

    .signup-wrapper .company-details .logo {
      padding: 0 20px;
      width: 20%;
      margin: 0 auto;
    }

    .signup-wrapper .company-details .logo .icon-food {
      background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/182774/food.png);
      background-size: contain;
      background-repeat: no-repeat;
      width: 38px;
      height: 38px;
      margin: 0 auto;
    }

    .signup-wrapper .company-details .title {
      padding: 20px;
      width: 74%;
      margin: 0 auto;
      text-transform: uppercase;
      color: #fff;
      font-weight: 600;
      font-size: 2em;
      text-shadow: 1px 1px #4b4a4a;
      text-align: center;
    }

    .signup-wrapper .company-details .slogan {
      display: none;
    }

    .signup-wrapper .signup-form .wrapper-2 {
      padding: 14px 20px;
      margin: 30px 80px;
    }

    .signup-wrapper .signup-form .form-title {
      font-size: 1.5em;
      color: #d4a50c;
      padding: 5px;
      text-align: center;

    }

    .signup-wrapper .signup-form .form .content-item {
      text-transform: uppercase;
      color: #A19F9C;
      font-size: 0.7em;
      letter-spacing: 1px;
      margin-top: 35px;
      text-align: center;
    }

    .signup-wrapper .signup-form .form input[type=text], .signup-wrapper .signup-form .form input[type=password] {
      border: none;
      border-bottom: 1px solid #e4e4e4;
      padding-top: 10px;
      padding-bottom: 10px;
      display: block;

      text-align: center;
      width: 100%;
    }

    .signup-wrapper .signup-form .signup {
      background-color: #d4a50c;
      border: none;
      color: white;
      padding: 15px 25px;
      font-size: 1em;
      text-transform: capitalize;
      margin-top: 49px;
      border-radius: 5px;

    }

    .signup-wrapper .signup-form .login {
      color: #d4a50c;
      padding: 20px;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.9em;
      width: 95%;
      margin: 0 auto;
      display: inline-block;
      text-align: center;

    }

    input::placeholder {
      color: #575757;
    }

    @media (min-width: 200px) {

      .signup-wrapper .signup-form .wrapper-2 {
        margin: 30px 23px;
      }

      .signup-wrapper .company-details .title {
        width: 90%;
        font-size: 1.5em;
      }

    }

    @media (min-width: 300px) {
      .signup-wrapper .signup-form .login {
        display: inline-block;
      }

      .signup-wrapper .signup-form .wrapper-2 {
        margin: 30px 60px;
      }

      .signup-wrapper .company-details .title {
        width: 80%;
        font-size: 2em;
      }

    }

    @media (min-width: 500px) {
      .signup-wrapper .signup-form .login {
        display: inline;
      }
    }

    @media (min-width: 700px) {
      .signup-wrapper .company-details,
      .signup-wrapper .signup-form {
        width: 50%;
      }

      .signup-wrapper {
        display: flex;
        max-width: 700px;
        margin: 0 auto;
        margin-top: 5%;
      }

      .signup-wrapper .company-details .wrapper-1 {
        padding-bottom: 150px;
        padding-top: 160px;
      }

      .signup-wrapper .company-details .slogan {
        padding: 0 20px;
        width: 70%;
        margin: 0 auto;
        color: #fff;
        font-size: 1.2em;
        text-align: center;
        text-shadow: 1px 1px #4b4a4a;
        display: block;
      }

      .signup-wrapper .company-details .title {
        width: 76%;
      }

      .signup-wrapper .signup-form .wrapper-2 {
        padding: 50px 40px;
        margin: 0;
      }

      .signup-wrapper .signup-form .login {
        display: inline;
      }

      .signup-wrapper .signup-form .form .content-item {
        text-align: initial;
      }

      .signup-wrapper .signup-form .form input[type=text], .signup-wrapper .signup-form .form input[type=password] {
        text-align: initial;

      }

      .signup-wrapper .signup-form .form-title {
        text-align: initial;
        padding: 0;
      }

      .body-form {
        margin-bottom: 50px;
        margin-top: 50px;
      }
    }


  </style>
  {{--  --}}
  @include('partials.errors')

  {{--  New Form--}}
  <body class="rong">
  <form action="{{route('hanUi.store')}}" method="post">
    <input type="hidden" name="id_c" value="{{old('id_c')?? $customer->id_c}}">

    <div class="content-wrapper body-form">
      <div class="content">
        <div class="signup-wrapper shadow-box">
          <div class="company-details ">

            <div class="shadow"></div>
            <div class="wrapper-1">
              <div class="logo">
                <div class="icon-hand">

                </div>
              </div>
              <h1 class="title">Handicraft</h1>
              <div class="slogan">We can make anything from our hands</div>
            </div>

          </div>
          <div class="signup-form ">
            <div class="wrapper-2">

              <div class="form">

                <p class="content-item">
                  <label>Full Name

                    <input type="text" class="form-control" id="fullName_c" name="fullName_c"
                           value="{{old('fullName_c')?? $customer->fullName_c}}">
                  </label>
                </p>

                <p class="content-item">
                  <label>DOB
                    <input type="date" class="form-control" id="dob" name="dob" value="{{old('dob')?? $customer->dob}}">

                  </label>
                </p>

                <label class="content-item">Gender

                  <select class="form-control" id="gender" name="gender" value="{{old('gender')?? $customer->gender}}">
                    <option>Female</option>
                    <option>Male</option>
                    <option>Other</option>
                  </select>
                </label>
                <p class="content-item">

                  <label>Email
                    <input type="text" class="form-control" id="email_c" name="email_c"
                           value="{{old('email_c')?? $customer->email_c}}">
                  </label>
                </p>

                <p class="content-item">
                  <label>Address
                    <input type="text" class="form-control" id="address_c" name="address_c"
                           value="{{old('address_c')?? $customer->address_c}}">

                  </label>

                </p>
                <p class="content-item">
                  <label>Phone

                    <input type="text" class="form-control" id="phone_c" name="phone_c"
                           value="{{old('phone_c')?? $customer->phone_c}}">
                  </label>
                </p>
                @csrf
                <div class="but">
                  <div class="btn_box">
                    <button type="submit" class="signup">Sign up</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +84 123456789
                </span>
              </a>
              <a href="{{route('hanUi.thank')}}">
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
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="{{route('hanUi.thank')}}">
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
  </body>
@endsection
@section('script')
@endsection




