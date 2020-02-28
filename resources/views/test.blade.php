<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
      
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- ** ==> if we want link to a css file exp :  link href="{{ asset('css/profile/profile.css') }}" rel="stylesheet" <==**  -->  


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts awsome : -->
                
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css" -->
       
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">

        <!-- vuetify: -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
         
        <script>window.laravel = { csrfToken : ' {{ csrf_token() }} '}</script>


        <!-- costum css files for admin page : -->
        
        <!-- link href="{{ asset('css/admin/layout.css') }}" rel="stylesheet">  
        
        <link href="{{ asset('css/admin/navigation_drawer/bar_top.css') }}" rel="stylesheet">  
        
        <link href="{{ asset('css/admin/navigation_drawer/dashboard.css') }}" rel="stylesheet" -->  
        

 </head>

    <body>

        <div id="app">       
       
                        
            <test></test>       
       
       
        </div>       
       
       
       
        <script src="{{ asset('js/app.js') }}"></script>       
 
    </body>

</html>
