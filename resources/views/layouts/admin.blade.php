<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Simavi</title>
  
    <!-- Favicon -->
    <link href="{{ asset('images/iconMaranatha.ico') }}" rel="shortcut icon" /> 
    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Estilo CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
  


</head>
<body>


    <div class="container-main">        

        <header>    
            @include('header')
        </header>	   


     
        <section> 
                                 
            @yield('content')            
            
        </section>
       
    	
             
        <footer> 
            @include('footer')       
        </footer>
    


        @yield('scripts')  

    </div>




</body>
</html>










{{--
        <section class="main"> 
             
            <div class="izquierda">          
                 @include('aside') 
            </div>

                  
            <div class="derecha align-top">            
                @yield('content')            
            </div>
        </section>


        <footer class="navbar navbar-fixed-bottom">
            @include('footer')       
        </footer>

--}}