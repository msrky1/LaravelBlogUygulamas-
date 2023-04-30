<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Laravel Blog Uygulaması" />
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <link rel="shortcut icon" href="favicon.ico" />

 


   
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Uygulaması</title>

    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

 
    
    <link id="theme-style" rel="stylesheet" href="{{asset('Admin/assets')}}/css/portal.css" />
 
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     
   

    
</head>
<body>

        

        <main class="py-4">
            @yield('content')
        </main>
 
   
</body>
</body>
</html>
