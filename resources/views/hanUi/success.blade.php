@extends('masters.hanUiMaster')

@section('main')

    <style>
        header{
          background: #f5d8c0;
        }
        body{
            /*font-family: 'Noto Sans', Arial, serif;*/
            font-weight: 400;
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale;
            /*line-height: 1.618em;*/
            background: /*linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), */url({{asset('images/images/rohoa1.jpg')}});
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        h2{
            /*font-family: 'Noto Sans', Arial, serif;*/
            font-weight: 700;
            font-size:40px;
            line-height: 1.618em;
        }
        section{
            max-width:800px;
            margin:8% auto 1em auto;
            background-color:#222;
            opacity: 0.8;
            filter: alpha(opacity=80); /* For IE8 and earlier */
            color:#fff;
            padding:1em 5%;
        }

        a{
            color: #00CC66;
        }
        a:focus{
            outline:none;
            outline-offset:inherit;
        }
        @media (max-device-width: 1027px) {

            body{
                text-align:center;
                font-size:larger;
            }
            section{
                max-width: 90%;
            }

        }

        @media (max-device-width: 640px) {
            section{
                max-width: 97%;
            }

        }


    </style>

<section>
    <h2>Registration successful!</h2>
    <p>...You will be redirected to the homepage in 5 seconds...</p>

  <p>If you have waited more than a few seconds and you are still seeing this message, please click on <a href="{{route('hanUi.index')}}">this link</a>! Thank you.</p>
</section>


@endsection

@section('script')
  <script>
    setTimeout(function() {
      window.location.href = "{{route('hanUi.index')}}"
    }, 5000); // 5 second
  </script>

@endsection
