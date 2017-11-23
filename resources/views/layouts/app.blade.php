<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pokémon</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!--nav bar -->
        <div class="topnav">
            <a id="home" href="/">Home</a>
            <a id="login" href="{{ route('register') }}">Register</a>
            <a id="login" href="{{ route('login') }}">login</a>
        </div>
    
        

    </div>

    @yield('content')
    

        <!-- footer -->
        <footer class="jumbotron custom-j">
            <div class="row">
                <div class="col-sm-4" style="display:flex;
                    justify-content:center;
                    align-items:center;
                    padding-top:10px;
                    padding-right:10px;
                    padding-bottom:10px">

                    <div class="over row" href="">
                  
                     <!-- <img class="git" src="Img/github-svg.svg">                -->
                        <div class="img" style="width:100px; height:100px;"></div>
                            <div style="padding-left:10px; padding-top:15px">
                            <img src="{{ asset('img/github-logo-white.png') }}" style="width:100px">
                       
                            <p>
                            Fork Project
                            </p>
                        </div>
                    </div> 
               </div>
               
                <div class="col-sm-4 col-xs-12 hor-cen " style=" 
               padding-left:2.5%;
               padding-right:2.5%;        
               display:flex;">
                    <div>
                        <h1 style="width:100%;">KMITL</h1>
                        <p>Faculty of Information Technology</p>
                    </div>
                </div>
                
                <div class="col-sm-4 sidebar-right" style="width:100%;
                display:flex;
                vertical-align:center;
                padding:10px;
                background-color:rgba(0,0,0,0)">
                <a href="/about"><div class="contact-2 over row">
                        <div class="img2" style="width:100px; height:100px;"></div>
                            <div style="padding-left:15px; padding-top:0px">
                                 <h2 style="margin-bottom:0px; padding:0px; margin-top:15px; text-decoration:none; color:white;">Contact us</h2>
                                 <p style="margin-top:-5px; padding:0px;">For more information</p>
                            </div>
                        </div>
                    </div></a>
                   <!-- <img src="Img/kaggle.png" style="width:100%; height:100%"> -->

            </div>
    </footer>

           <div style="background-color:black; height:30px; width:100%; align-items:right; color:rgb(255, 255, 255); display: flex;
           justify-content: center;">
             Copyright &copy ITF Group
           </div>
           
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
