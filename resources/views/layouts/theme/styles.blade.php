<script src="{{ asset('assets/js/loader.js') }}"></script>
<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!-- <link href="plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css"> No vamos a utilizar los graficos del template-->
<!-- <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" class="dashboard-analytics" /> No vamos a utilizar los graficos del template-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css" /-->
<!--link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" type="text/css" /-->

<link href="{{ asset('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />

<!--link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" /-->

<link href="{{ asset('assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/apps/scrumboard.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/apps/notes.css') }}" rel="stylesheet" type="text/css" />

<style>
    aside{
        display: none!important;
    }
    .page-item.active .page-link{
        z-index: 3;
        color: #fff;
        background-color: #3b3f5c;
        border-color:  #3b3f5c;
    }

    @media (max-width: 480px)
    {
        .mtmobile {
            margin-bottom: 20px!important;
        }
        .mbmobile {
            margin-bottom: 10px!important;
        }
        .hideonsm {
            display: none!important;
        }
        .inblock {
            display:block;
        }
    }
    /*sidebar background*/
    .sidebar-theme #compactSidebar{
        background: #191e3a!important;
    }

    /*sidebar collapse background*/
    .header-container .sidebarCollapse{
        color: #3B3F5C!important;
    }

    .navbar .navbar-item .nav-item form.form-inline input.search-form-control {
        font-size: 15px;
        background-color: #3B3F5C!important;
        padding-right: 40px;
        padding-top: 12px;
        border: none;
        color: #fff;
        back-shadow: none;
        border-radius: 30px;
    }

</style>

@livewireStyles