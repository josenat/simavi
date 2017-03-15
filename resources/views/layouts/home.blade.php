<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simavi</title>
  
    <!-- Favicon -->
    <link href="{{ asset('images/iconMaranatha.ico') }}" rel="shortcut icon" /> 
    <!-- Estilo Fuente -->    
    <link href="{{ asset('') }}" rel="stylesheet">    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Estilo CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    

</head>
<body>

    <header>    
        @include('header')
    </header>	   

    
    <section> 
    
        @yield('content')

    </section>

	
    <footer class="navbar navbar-fixed-bottom">
        @include('footer')
    </footer>

</body>
</html>