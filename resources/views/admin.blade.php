<!doctype html>
<html lang="en">
  <head>
    <title>Pokémon</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hovereffect.css') }}" rel="stylesheet">
    <!-- <link href="framework.css" rel="stylesheet"> -->
  </head>
  <body>
    
    <!--nav bar -->
    <div class="topnav">
      <a id="home" href="/" >Home</a>
    </div>

    <div class="upload">
      <form action="ImportClients" method="post" enctype="multipart/form-data">
        <label>Upload file : </label><br>
        <input type="file" name="file" />
        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
        <input type="submit" value="Upload">
      </form>
    </div>

    </footer>
    <div style="background-color:black; height:30px; width:100%; align-items:right; color:rgb(255, 255, 255); display: flex;
    justify-content: center;">
    Copyright &copy ITF Group
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
