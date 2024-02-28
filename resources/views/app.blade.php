<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('build/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('build/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('build/assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('build/assets/css/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @viteReactRefresh
    @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
    @inertiaHead
</head>


<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>    
    @inertia
</body>
 <!-- plugin for charts  -->
 <script src="{{ asset('build/assets/js/plugins/chartjs.min.js') }}" async></script>
 <!-- plugin for scrollbar  -->
 <script src="{{ asset('build/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
 <script src="{{ asset('build/assets/js/perfect-scrollbar.js') }}" async></script> 
 <!-- main script file  -->
 <script src="{{ asset('build/assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>

</html>
