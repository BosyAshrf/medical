<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--- Style css -->
    @if (App::getLocale() == 'en')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @else
    <link href="{{ asset('assets/css/style_ar.css') }}" rel="stylesheet">
    @endif
    
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    
    <!--Color Switcher Mockup-->
    <link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('assets/css/color-themes/default-theme.css') }}" rel="stylesheet">
    
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>