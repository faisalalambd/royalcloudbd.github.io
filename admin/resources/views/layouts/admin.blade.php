<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->



    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/codemirror/theme/duotone-dark.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/components.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('admin')}}/assets/img/favicon.png" />

</head>

<body>
  
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     
     
   <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      
      <!--left menubar start-->
  <div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">

<!-- ############################## Logo ############################## -->
<div class="sidebar-brand">
    <a href="index.php">
        <img alt="image" src="{{asset('admin')}}/assets/img/logo.png" class="header-logo" />
        <span class="logo-name">Royal Techno</span>
    </a>
</div>
<!-- End Logo -->


<ul class="sidebar-menu">

    <li class="dropdown">
        <a href="index.php" class="nav-link">
            <i data-feather="monitor"></i>
            <span>Dashboard</span></a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('slider.index') }}">
            <i data-feather="file"></i>
            <span>Sliders</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('smallBanner.index') }}">
            <i data-feather="file"></i>
            <span>Upper Small Banners</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('downBanner.index') }}">
            <i data-feather="file"></i>
            <span>Down Small Banners</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('product.index') }}">
            <i data-feather="file"></i>
            <span>Products</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('brand.index') }}">
            <i data-feather="file"></i>
            <span>Brands</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('category.index') }}">
            <i data-feather="file"></i>
            <span>Category</span>
        </a>
    </li>
    <li>
        <a class="nav-link" href="{{ route('subcategory.index') }}">
            <i data-feather="file"></i>
            <span>Subcategory</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('order.index') }}">
            <i data-feather="file"></i>
            <span>Order</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i data-feather="file"></i>
            <span>Gallery</span>
        </a>
    </li>

    <li>
        <a class="nav-link" href="register.php">
            <i data-feather="file"></i>
            <span>Register</span>
        </a>
    </li>

</ul>

</aside>
      </div>
      <div class="main-content">



      @yield('content')



      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
<script src="{{asset('admin')}}/assets/js/app.min.js"></script>

<!-- JS Libraies -->
<script src="{{asset('admin')}}/assets/bundles/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="{{asset('admin')}}/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{asset('admin')}}/assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/summernote/summernote-bs4.js"></script>
<script src="{{asset('admin')}}/assets/bundles/codemirror/lib/codemirror.js"></script>
<script src="{{asset('admin')}}/assets/bundles/codemirror/mode/javascript/javascript.js"></script>
<script src="{{asset('admin')}}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/ckeditor/ckeditor.js"></script>

<!-- Page Specific JS File -->
<script src="{{asset('admin')}}/assets/bundles/datatables/datatables.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/jszip.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/assets/js/page/datatables.js"></script>
<script src="{{asset('admin')}}/assets/js/page/index.js"></script>
<script src="{{asset('admin')}}/assets/js/page/forms-advanced-forms.js"></script>
<script src="{{asset('admin')}}/assets/js/page/ckeditor.js"></script>

<!-- Template JS File -->
<script src="{{asset('admin')}}/assets/js/scripts.js"></script>

<!-- Custom JS File -->
<script src="{{asset('admin')}}/assets/js/custom.js"></script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>