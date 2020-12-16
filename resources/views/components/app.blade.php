<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KAI | @yield('page_name')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection"/>
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.material.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2_material.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@sweetalert2/themes@3.1.0/material-ui/material-ui.min.css">
    <link rel="stylesheet" href="{{asset('css/vegas.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/materialize-tags.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content='' name='description'/>
    <meta name="author" content="Daffa Prayoga"/>
    <meta content='' name='keywords'/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="roboto" style="background-color: #f9f9f9;">
<div class="navbar-fixed">
    <nav class="z-depth-0 navbig white transisi nav-extended">
        <div class="nav-wrapper">
            <div class="containz" style="padding-left: 30px;padding-right: 30px;">
                <a href="{{url('/')}}" class="brand-logo brand-logo-admin left font-bold"
                   style="letter-spacing: -0.2px;">
                    <img class="hide-on-small-only transisi" src="{{asset('img/logo.svg')}}"
                         style="height: 30px;margin-right: 5px;margin-top: 10px;">
                    <img class="hide-on-med-and-up" src="{{asset('img/logo.svg')}}"
                         style="height: 50px;margin-right: 5px;margin-top: 10px;">
                </a>
                <ul class="right hide-on-med-and-down kanan-nav" style="position: relative;left: 20px;margin-top: -5px">
                    <li>
                        <a href="#" data-activates="notification_bar" class="init-notification waves-effect">
                            <i class="material-icons fas fa-bell admin-a accent-color"></i>
                            <div class="notification-dots accent-color-background-2 right"
                                 style="width: 10px;height: 10px;border-radius: 13px;right: -2px;top: -45px;z-index: 12;position: relative"></div>
                        </a>
                    </li>
                    <li style="width: 1px; height: 50px; background-color: #ddd;margin-top: 10px;margin-left: 20px;margin-right: 20px"></li>
                    <li><a href="#" class="grey-text text-darken-4 dropdown-button waves-effect roboto-bold"
                           data-activates='dropdown_logout' style="font-size: 14px;letter-spacing: 0.5px"><span
                                class="right" style="margin-top: 10px;margin-left: 10px;">
                                <div class="card-photo z-depth-12"
                                     style="width: 40px;height: 40px;margin-right: 10px;border-radius: 40px;background-image: url('{{asset('img/user.svg')}}');"></div></span>
                            <span class="right"
                                  style="position: relative;top: -10px;text-align: right">Lindsey Workman</span> <br>
                            <span class="roboto grey-text right"
                                  style="position:relative;top: -55px;font-size: 12px;right: 60px">Sales Manager</span>
                        </a></li>
                    <ul id='dropdown_logout' class='dropdown-content z-depth-13' style="border-radius: 8px;">
                        <li>
                            <a href="#"
                               class="grey-text text-darken-1 waves-effect" style="font-size: 0.9rem"><i
                                    class="material-icons grey-text text-darken-2 left fas fa-envelope" style="font-size: 1.1rem"></i>Mailbox</a>
                        </li>
                        <li>
                            <a href="#"
                               class="grey-text text-darken-1 waves-effect" style="font-size: 0.9rem"><i
                                    class="material-icons grey-text text-darken-2 left fas fa-id-card" style="font-size: 1.1rem"></i>Profile</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}"
                               class="accent-color-2 waves-effect" style="font-size: 0.9rem"><i
                                    class="material-icons accent-color-2 left fas fa-power-off" style="font-size: 1.1rem"></i>Log Out</a>
                        </li>
                    </ul>
                </ul>
                <a href="#" data-activates="navbar-z-menu" style="margin-top: 5px;margin-right: -15px;"
                   class="right accent-color text-darken-1 button-collapse init-navbar-z"><i
                        class="material-icons">menu</i></a>
            </div>
        </div>
        <div class="nav-content">
            <div class="contain" style="margin-left: 280px">
                <a href="#" class="btn-floating z-depth-0 accent-color-background"
                   style="width: 27px;height: 27px;position:absolute;left: -30px;top: 60px"><i
                        class="material-icons white-text" style="line-height: 27px">keyboard_arrow_left</i></a>
                <span class="nav-title grey-text text-darken-4 roboto-bold"
                      style="font-size: 26px;letter-spacing: 0.5px;margin-top: -15px;">@yield('page_name')</span>
            </div>
        </div>
    </nav>
</div>
<ul id="slide-out" class="side-nav fixed z-depth-0" style="width: 250px">
    <li style="padding-top: 25px;padding-bottom: 20px;"><a href="#!user"><img style="height: 35px;"
                                                                              src="{{asset('img/logo.svg')}}"></a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == 'org_chart') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="{{url('/org_chart')}}" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == 'org_chart') {{asset('img/org_chart_oranged.svg')}} @else {{asset('img/org_chart.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;"
                alt=""> Org.Chart</a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == 'family_tree') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="{{url('/family_tree')}}" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == 'family_tree') {{asset('img/family_chart_oranged.svg')}} @else {{asset('img/family_chart.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;"
                alt=""> Family Tree</a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == 'position_view') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="#!" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == 'position_view') {{asset('img/position_view_oranged.svg')}} @else {{asset('img/position_view.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;"
                alt=""> Position View</a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == 'talent_search') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="#!" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == 'talent_serach') {{asset('img/talent_search_oranged.svg')}} @else {{asset('img/talent_search.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;"
                alt=""> Talent Search</a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == 'talent_pool') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="#!" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == 'talent_pool') {{asset('img/talent_pool_oranged.svg')}} @else {{asset('img/talent_pool.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;"
                alt=""> Talent Pool</a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == '9_box') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="#!" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == '9_box') {{asset('img/9_box_oranged.svg')}} @else {{asset('img/9_box.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;" alt="">
            9 Box</a></li>
    <li>
        <a class="roboto @if (request()->segment(1) == 'report') accent-color-2 active-back @else grey-text text-darken-3 @endif"
           href="#!" style="font-size: 15px;"><img
                src="@if (request()->segment(1) == 'report') {{asset('img/report_oranged.svg')}} @else {{asset('img/report.svg')}} @endif"
                class="material-icons" style="height: 20px;margin: 0 20px 0 0;"
                alt=""> Report</a></li>
</ul>

@yield('page_body')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.matchHeight.js')}}"></script>
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.material.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/masonry.pkgd.min.js')}}"></script>

<script type="text/javascript">
    $('.modal').modal();

    $('.dropdown-button').dropdown({
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
        }
    );

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        format: 'yyyy/mm/dd',
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: true, // Close upon selecting a date,
        container: undefined, // ex. 'body' will append picker to body
    });
    $('.datepicker').on('mousedown', function (event) {
        event.preventDefault();
    });
    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button,
        container: undefined, // ex. 'body' will append picker to body
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function () {
        } //Function for after opening timepicker
    });
    $('.timepicker').on('mousedown', function (event) {
        event.preventDefault();
    });
    $(document).ready(function () {
        $('select').material_select();
    });

</script>

@yield('js_custom')

</body>

</html>
