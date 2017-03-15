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
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet') }}" type="text/css">    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Estilo CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            padding-top: 250px;
            padding-bottom: 250px;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 50px;
            margin-bottom: 40px;
        }
    </style>    
</head>
<body>

    <header>    
        @include('header')
    </header>   

    <div class="container">
        <div class="content">

            <div class="title">Error del Servidor</div>
        </div>
    </div>

    <footer class="navbar navbar-fixed-bottom">
        @include('footer')
    </footer>    

</body>
</html>