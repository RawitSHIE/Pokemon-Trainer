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
    <!-- <link href="{{ asset('css/hovereffect.css') }}" rel="stylesheet"> -->
  </head>
  <body>
  <div class="topnav">
      <a id="home" href="/" >Home</a>
      @if(Auth::check())
        <a id="login" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                          <a id="login" href="/console">Edit</a>
                                        @else
                                          <a id="login" href="/login">Login</a>
      @endif
      <a id="login" href="/all">pokelist</a>
    </div>





<div class="" style="width:100%; padding:100px">

  <div style= "background-color: transparent; text-align:center; margin:20px;" >
    <img src="{{asset("img/pokemon_web")}}/{{ strtolower($data->name) }}.jpg" style="width:250px;max-width:100%;">
    <p style="color:#000; font-size:1.5em;">
    {{$data->name}}
    </p>
  </div>

  <div class="hor-cen">
  <div class="col-sm-5">
    <form action="/console/data/{{ $data->id }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Pokemon ID</label>
              <input class="form-control" type="text" value="{{ $data->no }}" name="no" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pokemon's name</label>
              <input class="form-control" type="text" value="{{ $data->name }}" name="name" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Species Type</label>
              <input class="form-control" type="text" value="{{ $data->type_1 }}" name="type_1" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail1">Special Type</label>
              <input class="form-control" type="text" value="{{ $data->type_2 }}" name="type_2" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Total</label>
              <input class="form-control" type="text" value="{{ $data->total }}" name="total" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Health Point</label>
              <input class="form-control" type="text" value="{{ $data->hp }}" name="hp" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Attack</label>
              <input class="form-control" type="text"value="{{ $data->attack }}" name="attack" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Defense</label>
              <input class="form-control" type="text" value="{{ $data->defense }}" name="defense" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Special Attack</label>
              <input class="form-control" type="text" value="{{ $data->sp_atk }}" name="sp_atk" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Special Defence</label>
              <input class="form-control" type="text" value="{{ $data->sp_def }}" name="sp_def" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Speed</label>
              <input class="form-control"  type="text" value="{{ $data->speed }}" name="speed" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Generation</label>
              <input class="form-control"  type="text" value="{{ $data->generation }}" name="generation" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Legendary</label>
              <input class="form-control"  type="text" value="{{ $data->legendary }}" name="legendary" placeholder="pika?">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            {{--  <input class="form-control" type="text" value="{{ $data->no }}" name="no">
            <input class="form-control" type="text" value="{{ $data->name }}" name="name">
            <input class="form-control" type="text" value="{{ $data->type_1 }}" name="type_1">
            <input class="form-control" type="text" value="{{ $data->type_2 }}" name="type_2">
            <input class="form-control" type="text" value="{{ $data->total }}" name="total">
            <input class="form-control" type="text" value="{{ $data->hp }}" name="hp">
            <input class="form-control" type="text" value="{{ $data->attack }}" name="attack">
            <input class="form-control" type="text" value="{{ $data->defense }}" name="defense">
            <input class="form-control" type="text" value="{{ $data->ap_atk }}" name="ap_atk">
            <input class="form-control" type="text" value="{{ $data->sp_def }}" name="sp_def">
            <input class="form-control" type="text" value="{{ $data->speed }}" name="speed">
            <input class="form-control" type="text" value="{{ $data->generation }}" name="generation">
            <input class="form-control" type="text" value="{{ $data->legendary }}" name="legendary">  --}}
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
  </div>
</div>


<footer class="jumbotron custom-j">
   
      <div class="row">
        <div class="col-sm-4" style="display:flex;
          justify-content:center;
          align-items:center;
          padding-top:10px;
          padding-right:10px;
          padding-bottom:10px">
       
          <a href="https://github.com/RawitSHIE/ITFWEB" target="_blank"><div class="over row">
           
              <!-- <img class="git" src="Img/github-svg.svg">                -->
              <div class="img" style="width:100px; height:100px;"></div>
              <div style="padding-left:10px; padding-top:15px">
                  <img src="{{ asset('img/github-logo-white.png') }}" style="width:100px">
                
                <p>
                  Fork Project
                </p>
              </div>
          </div></a>
        </div>
        
         <div class="col-sm-4 col-xs-12 hor-cen" style=" 
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
      </div>

    </footer>
    <div style="background-color:black; height:30px; width:100%; align-items:right; color:rgb(255, 255, 255); display: flex;
    justify-content: center;">
    Copyright &copy ITF Group
    </div>
  </body>
</html>