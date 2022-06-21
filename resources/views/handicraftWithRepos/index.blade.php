@extends('masters.handicraftMasterwithRepos')

@section('main')


<style>
  .panel-table .panel-body {
    padding: 0;
  }

  .panel-table .panel-body .table-bordered {
    border-style: none;
    margin: 0;
  }

  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type {
    text-align: center;
    width: 100px;
  }

  .panel-table .panel-body .table-bordered>thead>tr>th:last-of-type,
  .panel-table .panel-body .table-bordered>tbody>tr>td:last-of-type {
    border-right: 0px;
  }

  .panel-table .panel-body .table-bordered>thead>tr>th:first-of-type,
  .panel-table .panel-body .table-bordered>tbody>tr>td:first-of-type {
    border-left: 0px;
  }

  .panel-table .panel-body .table-bordered>tbody>tr:first-of-type>td {
    border-bottom: 0px;
  }

  .panel-table .panel-body .table-bordered>thead>tr:first-of-type>th {
    border-top: 0px;
  }

  .panel-table .panel-footer .pagination {
    margin: 0;
  }

  .panel-table .panel-footer .col {
    line-height: 34px;
    height: 34px;
  }

  .panel-table .panel-heading .col h3 {
    line-height: 30px;
    height: 30px;
  }

  .panel-table .panel-body .table-bordered>tbody>tr>td {
    line-height: 34px;
  }
  .center{
    margin-left: 220px;
    /*margin-right: 150px ;*/
  }
  .msg{
    margin: 0 200px 0 20px ;
  }
  .width{
    width: 10%;
  }
 #name{
   width: 20%;
 }
 .null{
   width: 10px;
 }
  .han{
    /*border: solid 1px red;*/
    padding-left: 280px ;
    padding-bottom: 10px;
    padding-top: 30px;
  }
  .cate{
    width: 50px;
  }
.boy{
  margin-right: 100px;
  margin-left: 215px;
  /*border: solid 1px red;*/
  width: 75%;
}
.but{
  width: 10%;
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
  .header__qr-img{
    width: 100px;
    /*height: 100px;*/
    z-index: 10;

  }



</style>

<div class="container  boy">
  <h1 class="display-4 han">Handicraft Index</h1>
  <div class="msg">

    @include('handicraftWithRepos.sessionmessage')
  </div>

  <div class="row ">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default panel-table">

                <div class="panel-body" >
        <div class="table table-hover" >
          <table class="table table-striped table-bordered table-list">
            <thead class="thead-dark">
            <tr>

              <th scope="col" id="name">Name</th>
              <th scope="col" class="width">Price($)</th>
              <th scope="col" class="text-center cate" >Category</th>
              <th scope="col" class="null ">&nbsp;</th>
              <th scope="col" class="null ">&nbsp;</th>
              <th scope="col" class="null ">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                  @foreach($product as $p)
                    <tr>

                      <td class="header__navbar-item header__navbar-item--has-qr  ">{{$p->name_p}}
                        <div class="header__qr">
                          <img src="{{asset('images/handicraf/'. $p->image_p)}}" alt="" class="header__qr-img">
                        </div>
                      </td>

                      <td class="text-center "  >{{$p->price_p}}</td>
                      <td class="text-center ">{{$p->categoryName}}</td>
                      <td class="but"><a type="button" class="btn btn-primary btn-sm "
                             href="{{route('handicraft.show', ['id_p' => $p->id_p])}}"
                        >Details</a>
                      </td>
                      <td  class="but" ><a type="button" class="btn btn-success btn-sm "
                             href="{{route('handicraft.edit', ['id_p' => $p->id_p])}}"
                        >Edit</a>
                      </td>
                      <td class="but">

                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('handicraft.confirm', ['id_p' => $p->id_p])}}"
                        >Delete</a></td>
                    </tr>
                  @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>




{{--</div>--}}
{{--//////////////////////////////////////////////--}}

{{--<body id="reportsPage">--}}


{{--///////////////////Nav//////////////////////////--}}
{{--<nav class="navbar navbar-expand-xl">--}}
{{--  <div class="container h-100">--}}
{{--    <a class="navbar-brand" href="index.html">--}}
{{--      <h1 class="tm-site-title mb-0">Product Admin</h1>--}}
{{--    </a>--}}
{{--    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--      <i class="fas fa-bars tm-nav-icon"></i>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--      <ul class="navbar-nav mx-auto h-100">--}}
{{--        <li class="nav-item">--}}
{{--          <a class="nav-link active" href="#">--}}
{{--            <i class="fas fa-tachometer-alt"></i>--}}
{{--            Dashboard--}}
{{--            <span class="sr-only">(current)</span>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item dropdown">--}}

{{--          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--             aria-haspopup="true" aria-expanded="false">--}}
{{--            <i class="far fa-file-alt"></i>--}}
{{--            <span>--}}
{{--                                    Reports <i class="fas fa-angle-down"></i>--}}
{{--                                </span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--            <a class="dropdown-item" href="#">Daily Report</a>--}}
{{--            <a class="dropdown-item" href="#">Weekly Report</a>--}}
{{--            <a class="dropdown-item" href="#">Yearly Report</a>--}}
{{--          </div>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--          <a class="nav-link" href="products.html">--}}
{{--            <i class="fas fa-shopping-cart"></i>--}}
{{--            Products--}}
{{--          </a>--}}
{{--        </li>--}}

{{--        <li class="nav-item">--}}
{{--          <a class="nav-link" href="accounts.html">--}}
{{--            <i class="far fa-user"></i>--}}
{{--            Accounts--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item dropdown">--}}
{{--          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"--}}
{{--             aria-haspopup="true" aria-expanded="false">--}}
{{--            <i class="fas fa-cog"></i>--}}
{{--            <span>--}}
{{--                                    Settings <i class="fas fa-angle-down"></i>--}}
{{--                                </span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--            <a class="dropdown-item" href="#">Profile</a>--}}
{{--            <a class="dropdown-item" href="#">Billing</a>--}}
{{--            <a class="dropdown-item" href="#">Customize</a>--}}
{{--          </div>--}}
{{--        </li>--}}
{{--      </ul>--}}
{{--      <ul class="navbar-nav">--}}
{{--        <li class="nav-item">--}}
{{--          <a class="nav-link d-block" href="login.html">--}}
{{--            Admin, <b>Logout</b>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--      </ul>--}}
{{--    </div>--}}
{{--  </div>--}}

{{--</nav>--}}
{{--//////////////////////////////--}}

{{--<div class="container mt-5">--}}
{{--  <div class="row tm-content-row">--}}
{{--    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">--}}
{{--      <div class="tm-bg-primary-dark tm-block tm-block-products">--}}
{{--        <div class="tm-product-table-container">--}}
{{--          <table class="table table-hover tm-table-small tm-product-table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--              <th scope="col">&nbsp;</th>--}}
{{--              <th scope="col">PRODUCT NAME</th>--}}
{{--              <th scope="col">UNIT SOLD</th>--}}
{{--              <th scope="col">IN STOCK</th>--}}
{{--              <th scope="col">EXPIRE DATE</th>--}}
{{--              <th scope="col">&nbsp;</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 1</td>--}}
{{--              <td>1,450</td>--}}
{{--              <td>550</td>--}}
{{--              <td>28 March 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 2</td>--}}
{{--              <td>1,250</td>--}}
{{--              <td>750</td>--}}
{{--              <td>21 March 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 3</td>--}}
{{--              <td>1,100</td>--}}
{{--              <td>900</td>--}}
{{--              <td>18 Feb 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 4</td>--}}
{{--              <td>1,400</td>--}}
{{--              <td>600</td>--}}
{{--              <td>24 Feb 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 5</td>--}}
{{--              <td>1,800</td>--}}
{{--              <td>200</td>--}}
{{--              <td>22 Feb 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 6</td>--}}
{{--              <td>1,000</td>--}}
{{--              <td>1,000</td>--}}
{{--              <td>20 Feb 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 7</td>--}}
{{--              <td>500</td>--}}
{{--              <td>100</td>--}}
{{--              <td>10 Feb 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 8</td>--}}
{{--              <td>1,000</td>--}}
{{--              <td>600</td>--}}
{{--              <td>08 Feb 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 9</td>--}}
{{--              <td>1,200</td>--}}
{{--              <td>800</td>--}}
{{--              <td>24 Jan 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 10</td>--}}
{{--              <td>1,600</td>--}}
{{--              <td>400</td>--}}
{{--              <td>22 Jan 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <th scope="row"><input type="checkbox" /></th>--}}
{{--              <td class="tm-product-name">Lorem Ipsum Product 11</td>--}}
{{--              <td>2,000</td>--}}
{{--              <td>400</td>--}}
{{--              <td>21 Jan 2019</td>--}}
{{--              <td>--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--          </table>--}}
{{--        </div>--}}
{{--        <!-- table container -->--}}
{{--        <a--}}
{{--          href="add-product.html"--}}
{{--          class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>--}}
{{--        <button class="btn btn-primary btn-block text-uppercase">--}}
{{--          Delete selected products--}}
{{--        </button>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">--}}
{{--      <div class="tm-bg-primary-dark tm-block tm-block-product-categories">--}}
{{--        <h2 class="tm-block-title">Product Categories</h2>--}}
{{--        <div class="tm-product-table-container">--}}
{{--          <table class="table tm-table-small tm-product-table">--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 1</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 2</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 3</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 4</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 5</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 6</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 7</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 8</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 9</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 10</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--              <td class="tm-product-name">Product Category 11</td>--}}
{{--              <td class="text-center">--}}
{{--                <a href="#" class="tm-product-delete-link">--}}
{{--                  <i class="far fa-trash-alt tm-product-delete-icon"></i>--}}
{{--                </a>--}}
{{--              </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--          </table>--}}
{{--        </div>--}}
{{--        <!-- table container -->--}}
{{--        <button class="btn btn-primary btn-block text-uppercase mb-3">--}}
{{--          Add new category--}}
{{--        </button>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
{{--</body>--}}

{{--//////////////////////////////////////////--}}





@endsection

@section('script')
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function() {
      $(".tm-product-name").on("click", function() {
        window.location.href = "edit-product.html";
      });
    });
  </script>
@endsection
