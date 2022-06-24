@extends('masters.handicraftMasterwithRepos')

@section('main')
  <style>

    /*

Product Admin CSS Template

https://templatemo.com/tm-524-product-admin

*/

    html {
      font-size: 16px;
      overflow-x: hidden;
    }
    body {
      font-family: Roboto, Helvetica, Arial, sans-serif;
      background-color: #4e657a;
      overflow-x: hidden;
    }
    a {
      transition: all 0.3s ease;
    }
    a:focus,
    a:hover {
      text-decoration: none;
    }
    button:focus {
      outline: 0;
    }
    .navbar-brand {
      display: flex;
      align-items: center;
    }
    .tm-site-icon {
      color: #656565;
    }
    .tm-site-title {
      display: inline-block;
      text-transform: uppercase;
      font-size: 1.3rem;
      font-weight: 700;
      color: #fff;
    }
    .navbar {
      height: 100px;
      background-color: #567086;
      padding: 0;
    }
    .navbar .container {
      position: relative;
    }
    .tm-logout-icon {
      font-size: 1.5em;
    }
    .tm-mt-big {
      margin-top: 57px;
    }
    .tm-mb-big {
      margin-bottom: 60px;
    }
    .tm-mt-small {
      margin-top: 20px;
    }
    .tm-block-col {
      margin-bottom: 30px;
    }
    .tm-block {
      padding: 40px;
      -webkit-box-shadow: 1px 1px 5px 0 #455c71;
      -moz-box-shadow: 1px 1px 5px 0 #455c71;
      box-shadow: 1px 1px 5px 0 #455c71;
      min-height: 350px;
      height: 100%;
      max-height: 450px;
    }
    .tm-block-avatar,
    .tm-block-settings {
      max-height: none;
    }
    .tm-block-avatar {
      height: auto;
    }
    .tm-block-h-auto {
      min-height: 1px;
      max-height: none;
      height: auto;
    }
    .tm-block-scroll {
      overflow-y: scroll;
    }
    .tm-block-overflow {
      overflow: hidden;
    }
    .tm-block-title {
      font-size: 1.1rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 30px;
    }
    .nav-link {
      color: #fff;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      font-size: 90%;
    }
    .nav-link > i {
      margin-bottom: 10px;
      margin-right: 0;
      font-size: 1.5rem;
    }
    .dropdown-item,
    .nav-link {
      padding: 15px 20px;
    }
    .dropdown-menu {
      font-size: 90%;
      color: #fff;
      background-color: #567086;
      border-radius: 0;
      padding-top: 10px;
      padding-bottom: 10px;
      min-width: auto;
    }
    .dropdown-item {
      color: #fff;
      padding: 15px 30px;
    }
    .navbar-nav .active > .nav-link,
    .navbar-nav .nav-link.active {
      background-color: #f5a623;
      color: #fff;
    }
    .navbar-nav .nav-link.active i {
      color: #fff;
    }
    .dropdown-item:focus,
    .dropdown-item:hover {
      background-color: #567086;
    }
    .navbar-nav a:hover,
    .navbar-nav a:hover i {
      color: #f5a623;
    }
    .nav-item {
      text-align: center;
    }
    .nav-item:last-child {
      margin-right: 0;
    }
    .dropdown-toggle::after {
      display: none;
    }
    .dropdown-menu {
      margin-top: 0;
      border: 0;
    }
    .tm-content-row {
      justify-content: space-between;
      margin-left: -20px;
      margin-right: -20px;
    }
    .tm-col {
      padding-left: 20px;
      padding-right: 20px;
      margin-bottom: 50px;
    }
    .tm-col-big {
      width: 39%;
    }
    .tm-col-small {
      width: 21.95%;
    }
    .tm-gray-circle {
      width: 80px;
      height: 80px;
      background-color: #aaa;
      border-radius: 50%;
      margin-right: 15px;
    }
    .tm-notification-items {
      overflow-y: scroll;
      height: 90%;
    }
    .tm-notification-item {
      padding: 15px;
      background-color: #4e657a;
      color: #fff;
      font-size: 95%;
      margin-bottom: 15px;
    }
    .tm-notification-item:last-child {
      margin-bottom: 0;
    }
    .tm-notification-link {
      color: #f5a623;
    }
    .tm-text-color-secondary {
      color: #bdcbd8;
    }
    .tm-small {
      font-size: 90%;
    }
    .table {
      background-color: #50697f;
      color: #fff;
      font-size: 85%;
      margin-bottom: 0;
    }
    thead {
      background-color: #486177;
      color: #fff;
    }
    .table thead th {
      border-bottom: 0;
    }
    .tm-status-circle {
      display: inline-block;
      margin-right: 5px;
      vertical-align: middle;
      width: 5px;
      height: 5px;
      border-radius: 50%;
      margin-top: -3px;
    }
    .moving {
      background-color: #9be64d;
      box-shadow: 0 0 8px #9be64d, inset 0 0 8px #9be64d;
    }
    .pending {
      background-color: #efc54b;
      box-shadow: 0 0 8px #efc54b, inset 0 0 8px #efc54b;
    }
    .cancelled {
      background-color: #da534f;
      box-shadow: 0 0 8px #da534f, inset 0 0 8px #da534f;
    }
    .tm-avatar {
      width: 345px;
    }
    .tm-avatar-container {
      position: relative;
      cursor: pointer;
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    .tm-avatar-delete-link {
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -25px;
      margin-top: -25px;
      z-index: 1000;
      padding: 14px;
      border-radius: 50%;
      background-color: rgba(57, 78, 100, 0.7);
      display: inline-block;
      width: 50px;
      height: 50px;
      text-align: center;
      display: none;
      transition: all 0.2s ease;
    }
    .tm-avatar-container:hover .tm-avatar-delete-link {
      display: block;
    }
    .tm-col-avatar {
      max-width: 425px;
      width: 37%;
      padding-left: 15px;
      padding-right: 15px;
    }
    .tm-col-account-settings {
      max-width: 822px;
      width: 63%;
      padding-left: 15px;
      padding-right: 15px;
    }
    .form-control {
      background-color: #54657d;
      color: #fff;
      border: 0;
    }
    .form-control:focus {
      background-color: #60738e;
      color: #fff;
      border-color: transparent;
      box-shadow: 0 0 0 0.1rem rgb(180, 206, 233, 0.5);
    }
    .form-group label {
      color: #fff;
      margin-bottom: 10px;
    }
    .tm-hide-sm {
      display: block;
    }
    .tm-list-group {
      counter-reset: myOrderedListItemsCounter;
      padding-left: 0;
    }
    .tm-list-group > li {
      list-style-type: none;
      position: relative;
      cursor: pointer;
      transition: all 0.3s ease;
      padding: 8px;
    }
    .tm-list-group > li:hover {
      color: #0266c4;
    }
    .tm-list-group > li:before {
      counter-increment: myOrderedListItemsCounter;
      content: counter(myOrderedListItemsCounter) ".";
      margin-right: 0.5em;
    }
    .tm-list {
      padding-left: 30px;
    }
    .tm-list > li {
      margin-bottom: 20px;
    }
    .form-control {
      padding: 19px 18px;
      border-radius: 0;
      height: 50px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .btn {
      border-radius: 0;
      padding: 13px 28px;
      transition: all 0.2s ease;
      max-width: 100%;
    }
    .btn-small {
      padding: 10px 24px;
    }
    .btn-primary {
      color: #fff;
      background-color: #f5a623;
      border: 2px solid #f5a623;
      font-size: 90%;
      font-weight: 600;
    }
    .btn-primary:active,
    .btn-primary:hover {
      color: #f5a623;
      background-color: transparent;
      border: 2px solid #f5a623;
    }
    .custom-file-input {
      cursor: pointer;
    }
    .custom-file-label {
      border-radius: 0;
    }
    .table td,
    .table th {
      border-top: 1px solid #415a70;
      padding: 15px 25px;
      vertical-align: middle;
    }
    .tm-table-small td,
    .tm-table-small th {
      padding-left: 12px;
      padding-right: 12px;
    }
    .table-hover tbody tr {
      transition: all 0.2s ease;
    }
    .table-hover tbody tr:hover {
      color: #a0c0de;
    }
    .tm-bg-primary-dark {
      background-color: #435c70;
    }
    .tm-bg-gray {
      background-color: rgba(0, 0, 0, 0.05);
    }
    .tm-table-mt {
      margin-top: 66px;
    }
    .page-item:first-child .page-link {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
    .page-item:last-child .page-link {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }
    .page-link {
      padding: 12px 18px;
    }
    .page-link,
    .page-link:hover {
      color: #000;
    }
    .page-item {
      margin-right: 18px;
    }
    .page-item:last-child {
      margin-right: 0;
    }
    .page-item.active .page-link {
      background-color: #e9ecef;
      border-color: #dee2e6;
      color: #000;
    }
    input[type="checkbox"] {
      cursor: pointer;
      -webkit-appearance: none;
      appearance: none;
      background-color: #394e64;
      background-position: center;
      border-radius: 50%;
      box-sizing: border-box;
      position: relative;
      box-sizing: content-box;
      width: 24px;
      height: 24px;
      transition: all 0.1s linear;
    }

    input[type="checkbox"]:focus {
      outline: 0 none;
      box-shadow: none;
    }
    .tm-block-products {
      min-height: 500px;
      margin-top: 60px;
      width: 1200px;


    }
    .tm-block-product-categories {
      min-height: 650px;
      margin-top: 60px;

    }
    .tm-product-table-container {
      max-height: 465px;
      margin-bottom: 15px;
      overflow-y: scroll;
    }
    .tm-product-table tr {
      font-weight: 600;
    }
    .tm-product-name {
      font-size: 0.95rem;
      font-weight: 600;
    }
    .tm-product-delete-icon {
      font-size: 1.1rem;
      color: #fff;
    }
    .tm-product-delete-link {
      padding: 10px;
      border-radius: 50%;
      background-color: #394e64;
      display: inline-block;
      width: 40px;
      height: 40px;
      text-align: center;
    }
    .tm-product-delete-link:hover .tm-product-delete-icon {
      color: #6d8ca6;
    }
    .custom-select {
      width: 100%;
      border: none;
      color: #acc6de;
      height: 50px;
      -webkit-appearance: none;
      -moz-appearance: none;
      -ms-appearance: none;
      -o-appearance: none;
      appearance: none;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      -ms-border-radius: 0;
      -o-border-radius: 0;
      border-radius: 0;
      padding: 15px;

    }
    .custom-select:focus {
      outline: 0;
    }
    .tm-trash-icon {
      color: #6e6c6c;
      cursor: pointer;
    }
    .tm-trash-icon:hover {
      color: #9f1321;
    }
    .tm-footer {
      background-color: #567086;
      padding-top: 30px;
      padding-bottom: 30px;
      -webkit-box-shadow: 0 -3px 5px 0 rgba(69, 92, 113, 0.59);
      -moz-box-shadow: 0 -3px 5px 0 rgba(69, 92, 113, 0.59);
      box-shadow: 0 -3px 5px 0 rgba(69, 92, 113, 0.59);
    }
    .custom-select {
      height: 50px;
      border-radius: 0;
    }
    .tm-product-img-dummy {
      max-width: 100%;
      height: 240px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      background: #aaa;
    }
    .tm-product-img-edit {
      max-width: 100%;
      position: relative;
    }
    .tm-product-img-edit i {
      display: none;
      position: absolute;
    }
    .tm-product-img-edit:hover i {
      display: block;
    }
    .tm-upload-icon {
      background: #455c71;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      text-align: center;
      padding-top: 15px;
      font-size: 22px;
    }
    .tm-login-col {
      max-width: 470px;
    }
    .navbar-toggler {
      border-color: #708da8;
      box-shadow: rgba(255, 255, 255, 0.1) 0 1px 1px 2px;
      border-radius: 0;
      padding: 10px 15px;
      transition: all 0.2s ease;
    }
    .navbar-toggler:hover {
      border-color: #f5a623;
      color: #f5a623;
    }
    .tm-nav-icon {
      color: #fff;
    }
    .navbar-toggler:hover .tm-nav-icon {
      color: #f5a623;
    }
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #394f62;
    }
    ::-webkit-scrollbar-thumb {
      background: #6d8da6;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #8ab5d6;
    }

    .tm-footer-link {
      color: white;
    }

    .tm-footer-link:hover,
    .tm-footer-link:focus {
      color: #aacbea;
    }

    @media (min-width: 1200px) {
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-left: 20px;
        padding-right: 20px;
      }
      .navbar-collapse {
        height: 100%;
      }
    }
    @media (min-width: 992px) {
      .navbar-expand-lg .navbar-nav .nav-link {
        padding: 15px 20px;
      }
    }
    @media (max-width: 1275px) and (min-width: 1200px) {
      .nav-item {
        margin-right: 15px;
      }
    }
    @media (max-width: 1350px) {
      .nav-item {
        margin-right: 1px;
      }
    }
    @media (max-width: 1199px) {
      .tm-col-big,
      .tm-col-small {
        width: 49.65%;
      }
      .navbar-collapse {
        padding: 0;
        box-shadow: rgba(255, 255, 255, 0.1) 0 1px 1px 1px;
        position: absolute;
        top: 72px;
        right: 20px;
        width: 200px;
        z-index: 1000;
      }
      .dropdown-menu {
        text-align: center;
      }
      .nav-link {
        color: #fff;
        background-color: #567086;
        padding: 15px;
        flex-direction: row;
      }
      .nav-link > i {
        font-size: 1rem;
        margin-right: 10px;
        margin-bottom: 0;
      }
      .nav-item {
        margin-right: 0;
      }
      .tm-block-taller {
        max-height: 520px;
      }
    }
    @media (max-width: 1199.98px) {
      .navbar-expand-xl > .container,
      .navbar-expand-xl > .container-fluid {
        padding-left: 15px;
        padding-right: 15px;
      }
      .navbar-collapse {
        right: 15px;
      }
    }
    @media (max-width: 991px) {
      .tm-col-big,
      .tm-col-small {
        width: 100%;
        min-height: 383px;
        height: auto;
      }
      .tm-block {
        padding: 30px;
      }
    }
    @media (max-width: 767px) {
      .tm-col-account-settings,
      .tm-col-avatar {
        width: 100%;
        max-width: 100%;
      }
      .tm-block-avatar {
        display: flex;
        flex-direction: column;
      }
      .tm-avatar {
        align-self: center;
      }
      .tm-hide-sm {
        display: none;
      }
    }
    @media (max-width: 633px) {
      .page-item {
        margin-top: 10px;
      }
      .custom-select {
        background-position: 96%;
      }
    }
    @media (max-width: 574px) {
      .navbar-collapse {
        top: 47px;
      }
      .navbar {
        height: 50px;
      }
      .tm-site-title {
        font-size: 1.4rem;
        margin-left: 7px;
      }
      .tm-site-icon {
        font-size: 2em;
      }
    }
    @media (max-width: 480px) {
      .tm-mt-big {
        margin-top: 45px;
      }
      .tm-mb-big {
        margin-bottom: 45px;
      }
      #barChart,
      #lineChart {
        max-height: 350px;
      }
    }

      .header__navbar-item{
        margin: 0 8px;
        position: relative;
        min-height: 26px;
        cursor: pointer;
      }
      .header__navbar-item--has-qr .header__qr{
        position: absolute;
      }
      .header__navbar-item--has-qr:hover .header__qr{
        display: block;
      }

      .header__qr{
        width: 270px;
        z-index: 2;
        position: absolute;
        left: 0;
        top: 120%;
        padding: 8px;
        border-radius: 2px;
        display: none;
        animation: FadeOn ease-in 0.85s;
      }
      .header__qr-img {
        width: 100px;
        /*height: 100px;*/
        z-index: 10;
      }

  </style>

{{--<style>--}}
{{--  .panel-table .panel-body {--}}
{{--    padding: 0;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered {--}}
{{--    border-style: none;--}}
{{--    margin: 0;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type {--}}
{{--    text-align: center;--}}
{{--    width: 100px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr>th:last-of-type,--}}
{{--  .panel-table .panel-body .table-bordered>tbody>tr>td:last-of-type {--}}
{{--    border-right: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type,--}}
{{--  .panel-table .panel-body .table-bordered>tbody>tr>td:first-of-type {--}}
{{--    border-left: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>tbody>tr:first-of-type>td {--}}
{{--    border-bottom: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>thead>tr:first-of-type>th {--}}
{{--    border-top: 0px;--}}
{{--  }--}}

{{--  .panel-table .panel-footer .pagination {--}}
{{--    margin: 0;--}}
{{--  }--}}

{{--  .panel-table .panel-footer .col {--}}
{{--    line-height: 34px;--}}
{{--    height: 34px;--}}
{{--  }--}}

{{--  .panel-table .panel-heading .col h3 {--}}
{{--    line-height: 30px;--}}
{{--    height: 30px;--}}
{{--  }--}}

{{--  .panel-table .panel-body .table-bordered>tbody>tr>td {--}}
{{--    line-height: 34px;--}}
{{--  }--}}
{{--  .center{--}}
{{--    margin-left: 220px;--}}
{{--    /*margin-right: 150px ;*/--}}
{{--  }--}}
{{--  .msg{--}}
{{--    margin: 0 200px 0 20px ;--}}
{{--  }--}}
{{--  .width{--}}
{{--    width: 10%;--}}
{{--  }--}}
{{-- #name{--}}
{{--   width: 20%;--}}
{{-- }--}}
{{-- .null{--}}
{{--   width: 10px;--}}
{{-- }--}}
{{--  .han{--}}
{{--    /*border: solid 1px red;*/--}}
{{--    padding-left: 280px ;--}}
{{--    padding-bottom: 10px;--}}
{{--    padding-top: 30px;--}}
{{--  }--}}
{{--  .cate{--}}
{{--    width: 50px;--}}
{{--  }--}}
{{--.boy{--}}
{{--  margin-right: 100px;--}}
{{--  margin-left: 215px;--}}
{{--  /*border: solid 1px red;*/--}}
{{--  width: 75%;--}}
{{--}--}}
{{--.but{--}}
{{--  width: 10%;--}}
{{--}--}}
{{--  .header__navbar-item{--}}
{{--    margin: 0 8px;--}}
{{--    position: relative;--}}
{{--    min-height: 26px;--}}
{{--    cursor: pointer;--}}
{{--  }--}}
{{--  .header__navbar-item--has-qr .header__qr{--}}
{{--    position: absolute;--}}
{{--  }--}}
{{--  .header__navbar-item--has-qr:hover .header__qr{--}}
{{--    display: block;--}}
{{--  }--}}

{{--  .header__qr{--}}
{{--    width: 270px;--}}
{{--    z-index: 2;--}}
{{--    position: absolute;--}}
{{--    left: 0;--}}
{{--    top: 120%;--}}
{{--    padding: 8px;--}}
{{--    border-radius: 2px;--}}
{{--    display: none;--}}
{{--    animation: FadeOn ease-in 0.85s;--}}
{{--  }--}}
{{--  .header__qr-img{--}}
{{--    width: 100px;--}}
{{--    /*height: 100px;*/--}}
{{--    z-index: 10;--}}

{{--  }--}}



{{--</style>--}}
{{--///////////////////old////////////////////--}}
{{--<div class="container  boy">--}}
{{--  <h1 class="display-4 han">Handicraft Index</h1>--}}

{{--  <div class="msg">--}}

{{--    @include('handicraftWithRepos.sessionmessage')--}}
{{--  </div>--}}

{{--  <div class="row ">--}}
{{--    <div class="col-md-10 col-md-offset-1">--}}
{{--      <div class="panel panel-default panel-table">--}}

{{--                <div class="panel-body" >--}}
{{--        <div class="table table-hover" >--}}
{{--          <table class="table table-striped table-bordered table-list">--}}
{{--            <thead class="thead-dark">--}}
{{--            <tr>--}}

{{--              <th scope="col" id="name">Name</th>--}}
{{--              <th scope="col" class="width">Price($)</th>--}}
{{--              <th scope="col" class="text-center cate" >Category</th>--}}
{{--              <th scope="col" class="null ">&nbsp;</th>--}}
{{--              <th scope="col" class="null ">&nbsp;</th>--}}
{{--              <th scope="col" class="null ">&nbsp;</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--                  @foreach($product as $p)--}}
{{--                    <tr>--}}

{{--                      <td class="header__navbar-item header__navbar-item--has-qr  ">{{$p->name_p}}--}}
{{--                        <div class="header__qr">--}}
{{--                          <img src="{{asset('images/handicraf/'. $p->image_p)}}" alt="" class="header__qr-img">--}}
{{--                        </div>--}}
{{--                      </td>--}}

{{--                      <td class="text-center "  >{{$p->price_p}}</td>--}}
{{--                      <td class="text-center ">{{$p->categoryName}}</td>--}}
{{--                      <td class="but"><a type="button" class="btn btn-primary btn-sm "--}}
{{--                             href="{{route('handicraft.show', ['id_p' => $p->id_p])}}"--}}
{{--                        >Details</a>--}}
{{--                      </td>--}}
{{--                      <td  class="but" ><a type="button" class="btn btn-success btn-sm "--}}
{{--                             href="{{route('handicraft.edit', ['id_p' => $p->id_p])}}"--}}
{{--                        >Edit</a>--}}
{{--                      </td>--}}
{{--                      <td class="but">--}}

{{--                        <a type="button" class="btn btn-danger btn-sm"--}}
{{--                           href="{{route('handicraft.confirm', ['id_p' => $p->id_p])}}"--}}
{{--                        >Delete</a></td>--}}
{{--                    </tr>--}}
{{--                  @endforeach--}}

{{--            </tbody>--}}
{{--          </table>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}

{{--</div>--}}
{{--////////////old//////////////////////////--}}

<div class="container mt-5">
  <div class="row tm-content-row">
    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container">
          <table class="table table-hover tm-table-small tm-product-table">
            <thead>
            <tr>

              <th scope="col">PRODUCT NAME</th>
              <th scope="col">Price($)</th>
              <th scope="col">Category</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>


            </tr>
            </thead>
            <tbody>
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 1</td>--}}

{{--              <td>1,450</td>--}}
{{--              <td>550</td>--}}
{{--              <td>28 March 2019</td>--}}


{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="bi bi-trash3-fill"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="bi bi-trash3-fill"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="bi bi-trash3-fill"></i>--}}
{{--                </a>--}}
{{--              </td>--}}

{{--            </tr>--}}
{{--       ///////////////////////////////////////////////////////////////////////--}}
        @foreach($product as $p)
                    <tr>

                      <td class="header__navbar-item header__navbar-item--has-qr  ">{{$p->name_p}}
                        <div class="header__qr">
                          <img src="{{asset('images/handicraf/'. $p->image_p)}}" alt="" class="header__qr-img">
                        </div>
                      </td>

                      <td class=" "  >{{$p->price_p}}</td>
                      <td class=" ">{{$p->categoryName}}</td>
                      <td class="but"><a type="button" class="tm-product-delete-link "
                             href="{{route('handicraft.show', ['id_p' => $p->id_p])}}"
                        ><i class="bi bi-eye"></i></a>
                      </td>
                      <td  class="but" ><a type="button" class="tm-product-delete-link "
                             href="{{route('handicraft.edit', ['id_p' => $p->id_p])}}"
                        ><i class="bi bi-plus-square"></i></a>
                      </td>
                      <td class="but">

                        <a type="button" class="tm-product-delete-link"
                           href="{{route('handicraft.confirm', ['id_p' => $p->id_p])}}"
                        ><i class="bi bi-trash3-fill"></i></a></td>
                    </tr>
                  @endforeach



            </tbody>
          </table>
        </div>
        <!-- table container -->
{{--        <a--}}
{{--          href="add-product.html"--}}
{{--          class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>--}}
{{--        <button class="btn btn-primary btn-block text-uppercase">--}}
{{--          Delete selected products--}}
{{--        </button>--}}
      </div>
    </div>

  </div>
</div>


@endsection

@section('script')
@endsection
