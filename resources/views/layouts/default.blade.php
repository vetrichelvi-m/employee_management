{{-- <!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="container">
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html> --}}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CommentController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>@yield('title')</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <!-- google font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- icons -->
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css">
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    {{-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script> --}}

    <!--bootstrap -->
    <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/bootstrap-datepicker/datepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/bootstrap-datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('/plugins/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/flatpicker/css/flatpicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/flatpicker/plugins/monthSelect/style.css') }}" rel="stylesheet" type="text/css">
    <!-- data tables -->
    <link href="{{ asset('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('/plugins/datatables/export/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Material Design Lite CSS -->
    <link href="{{ asset('/plugins/material/material.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/material_style.css') }}" rel="stylesheet" type="text/css">
    <!-- steps -->
    <link href="{{ asset('/plugins/steps/steps.css') }}" rel="stylesheet" type="text/css">
    <!-- inbox style -->
    {{-- <link  href="{{ asset('/css/pages/inbox.min') }}"  rel="stylesheet" type="text/css"> --}}
    <!-- Theme Styles -->
    <link href="{{ asset('css/theme/light/theme_style.css') }}" id="rt_style_components" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('/css/plugins.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/theme/light/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/theme/light/theme-color.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <!--tooltipster-->
    <link href="{{ asset('/plugins/tooltipster/dist/css/tooltipster.bundle.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('/plugins/tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css') }}"
        rel="stylesheet" type="text/css">
    <!-- Jquery Toast css -->
    <link href="{{ asset('/plugins/toastr/toastr.css') }}" rel="stylesheet" type="text/css">
    <!--select2-->
    <link href="{{ asset('/plugins/select2/css/select2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- passtrengthmeter -->
    <link href="{{ asset('/plugins/passtrength/css/passtrength.css') }}" rel="stylesheet" type="text/css">
    <!-- nProgress Loading -->
    <link href="{{ asset('/plugins/nprogress/nprogress.css') }}" rel="stylesheet" type="text/css">
    <!-- steps -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ asset('/plugins/steps/jquery.steps.js') }}"></script>
    <?php //echo $this->Html->script('/js/pages/steps/steps-data');
    ?>
    <!-- passtrengthmeter -->

    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/plugins/passtrength/js/jquery.passtrength.min.js') }}"></script>

    <script src="{{ asset('/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('/js/pages/sparkline/sparkline-data.js') }}"></script>
    <script src="{{ asset('/plugins/flatpicker/js/flatpicker.min.js') }}"></script>
    <script src="{{ asset('/plugins/flatpicker/plugins/monthSelect/index.js') }}"></script>
    <!-- Common js-->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/pages/validation/form-validation.js') }}"></script>
    <script src="{{ asset('/js/layout.js') }}"></script>
    <script src="{{ asset('/js/theme-color.js') }}"></script>
    <!-- material -->
    <script src="{{ asset('/plugins/material/material.min.js') }}"></script>
    <script src="{{ asset('/plugins/sweet-alert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/js/pages/sweet-alert/sweet-alert-data.js') }}"></script>
    <script src="{{ asset('/js/pages/date-time/date-time.init.js') }}"></script>

    <!-- dropzone -->
    <script src="{{ asset('/plugins/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('/plugins/dropzone/dropzone-call.js') }}"></script>
    <!--tagsinput-->
    <script src="{{ asset('/plugins/jquery-tags-input/jquery-tags-input.js') }}"></script>
    <script src="{{ asset('/plugins/jquery-tags-input/jquery-tags-input-init.js') }}"></script>
    <!-- notifications -->
    {{-- <script src="{{asset('/plugins/toastr/toastr')}}"></script> --}}
    <!-- counterup -->
    <script src="{{ asset('/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- chart js -->
    <!-- <script src="{{ asset('/plugins/chart-js/Chart.min.js') }}"></script>
  <script src="{{ asset('/plugins/chart-js/utils') }}"></script>
  <script src="{{ asset('/js/pages/chart/chartjs/home-data2') }}"></script>
  <script src="{{ asset('/plugins/sparkline/jquery.sparkline') }}"></script>
  <script src="{{ asset('/js/pages/sparkline/sparkline-data') }}"></script> -->
    <!--apex chart-->
    <!-- <script src="{{ asset('/plugins/apexcharts/apexcharts.min') }}"></script> -->
    <!-- Page Specific JS File -->
    <!-- <script src="{{ asset('/js/pages/chart/apex/apexcharts.data') }}"></script> -->
    <!--amchart chart-->
    <?php // echo $this->Html->script('/plugins/amcharts4/core');
    ?>
    <?php // echo $this->Html->script('/plugins/amcharts4/charts');
    ?>
    <?php //echo $this->Html->script('/plugins/amcharts4/animated');
    ?>
    <?php //echo $this->Html->script('/plugins/amcharts4/worldLow');
    ?>
    <?php //echo $this->Html->script('/plugins/amcharts4/maps');
    ?>
    <?php //echo $this->Html->script('/js/pages/chart/amchart/amchart-data');
    ?>
    <!-- Excel export -->
    <script src="{{ asset('/js/export-excel.js') }}"></script>
    <!-- summernote -->
    <?php //echo $this->Html->script('/plugins/summernote/summernote');
    ?>
    <!-- <script src="{{ asset('/plugins/summernote/summernote.js') }}"></script> -->
    <!-- nProgress Loading -->
    <script src="{{ asset('/plugins/nprogress/nprogress.js') }}"></script>


    <script src="{{ asset('/plugins/smooth-scrollbar/smooth-scrollbar.js') }}"></script>
    <script src="{{ asset('/plugins/smooth-scrollbar/overscroll.js') }}"></script>
    <!-- end js include path -->

</head>

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white"
    data-scrollbar>
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">

                        <span class="logo-default"><img src="{{ asset('logo-msl.png') }}" alt="Logo"
                                style="margin-left: -1%; width: 80%;"></span> </a>
                    <!-- <span class="logo-icon"><img src="<?php // echo $this->Url->build('/', true)
                    ?>hero-logo.png"
                            alt="Logo" style="height: 45px; width: 96px;"></span> </a></span> -->
                    </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler" style="color: #000">
                            <ion-icon name="reorder-three"></ion-icon>
                        </a></li>
                </ul>
                <!-- start mobile menu -->
                <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li><a class="fullscreen-btn">
                                <ion-icon name="scan-outline" size="small"></ion-icon>
                            </a></li>
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="Dp" class="img-circle" src="{{ asset('img/profile.png') }}" />
                                <span class="username username-hide-on-mobile" style="text-transform:capitalize;">
                                    @php echo $LOGGEDNAME="vetriselvi"; @endphp </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                </li>
                                <li>
                                </li>
                                <li>
                                    <a href="#">
                                        <ion-icon name="lock-closed-outline" size="small"></ion-icon> Lock
                                    </a>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <!-- <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->


        <!-- start page container -->
        <!-- end page container -->



        <!-- start footer -->
        <!-- end footer -->


    </div>
    <!--tooltipster-->
    <script src="{{ asset('/plugins/nprogress/nprogress.js') }}"></script>

    <script src="{{ asset('/plugins/tooltipster/dist/js/tooltipster.bundle.js') }}"></script>

    <!-- Meterial Loading -->
    <?php //echo $this->Html->script('/js/pages/material-loading/material-loading');
    ?>
    <!-- Marquee -->
    <?php //echo $this->Html->script('/js/pages/marquee/jquery.marquee');
    ?>
    <?php //echo $this->Html->script('/js/pages/marquee/jquery.pause');
    ?>
    <!--select2-->
    <script src="{{ asset('/js/pages/material-select/getmdl-select.js') }}"></script>
    <script src="{{ asset('/plugins/select2/js/select2.js') }}"></script>
    <script src="{{ asset('/js/pages/select2/select2-init.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script> -->
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

</body>

<script type="text/javascript">
    // Top Progress bar
    // NProgress.configure({
    //  speed: 1000,
    //     showSpinner: false
    // });

    NProgress.start();
    setTimeout(function() {
        NProgress.done();
    }, 1000);

    // end of Top Progress bar

    // Smooth-Scrollbar
    // var Scrollbar = window.Scrollbar;

    // Scrollbar.init(document.querySelector('#scroll'), {
    //     onlyScrollIfNeeded: true
    // });
    // Scrollbar.initAll();
    // end of Smooth-Scrollbar

    // $(":input").bind("keyup change", function(e) {
    //     var pattern = new RegExp('<script>', 'gi');
    //     var endtag = new RegExp('<\/script>');

    //     this.value = this.value.replace(pattern, '').replace(/  +/g, ' ');
    //     this.value = this.value.replace(endtag, '').replace(/  +/g, ' ');

    // });

    function titleCase(string) {
        var sentence = string.toLowerCase().split(" ");
        for (var i = 0; i < sentence.length; i++) {
            sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
        }

        return sentence.join(" ");
    }


    jQuery('.titleCase').keyup(function() {
        this.value = titleCase(this.value);
    });


    jQuery('body').on('keyup', '.num', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.amount', function(e) {
        this.value = this.value.replace(/[^0-9\.]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.alphanumeric', function(e) {
        this.value = this.value.replace(/[^0-9a-zA-Z ]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.specialfield', function(e) {
        this.value = this.value.replace(/[^a-zA-Z0-9\.\&\-\_\/\s]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.trimspace', function(e) {
        var value = this.value.trim();
    });

    $(document).on("input", ".name", function() {
        this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    });

    jQuery('body').on('focusout', '.email', function(e) {
        var trimmedValue = $('.email').val();
        $('.email').val('').val(trimmedValue);
    });

    $('.datetimepicker').flatpickr({
        maxDate: "today",
        enableTime: true,
        time_24hr: false,
        dateFormat: "d-m-Y H:i K"
    });
    $('.datepicker').flatpickr({
        maxDate: "today",
        dateFormat: "d-m-Y",
        allowInput: false
    });
    $(document).ready(function() {
        $('.tooltipster').tooltipster({
            contentAsHTML: true,
            animation: 'grow',
            delay: 200,
            theme: 'tooltipster-shadow',
            touchDevices: false,
            trigger: 'hover'
        });
    });
</script>

</html>
