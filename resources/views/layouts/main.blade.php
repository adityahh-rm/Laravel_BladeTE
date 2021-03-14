<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head data-spy="scroll" data-target="#myNavbar" data-offset="0">
<body>
    <header>
        @include('includes.header')
    </header>
    <!-- sidebar content -->
    @include('includes.sidebar')

    <div class="container-fluid">
        @yield('content')    
    </div>

    <div>  
        @include('includes.footer')
    </div> 

</body>
</html>