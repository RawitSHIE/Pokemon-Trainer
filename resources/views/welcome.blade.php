<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $data->name }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

         <!-- Bootstrap CSS -->
    <link href="{{ asset('css/hovereffect.css') }}" rel="stylesheet">
    <link href="{{ asset('css/devices.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    

        <!-- Styles -->
        <style>
            html, body {
              color: #636b6f;
              /*font-family: 'Raleway', sans-serif;*/
              font-weight: 100;
              height: 100vh;
              margin: 0;
            }

            @-webkit-keyframes jumpIn {
              from {
                transform: scale(0);
                opacity: 0.5;
              }
              to {
                transform: scale(1);
                opacity: 1;
              }
            }
            @keyframes jumpIn {
              from {
                transform: scale(0);
                opacity: 0.5;
              }
              to {
                transform: scale(1);
                opacity: 1;
              }
            }
            .chart {
              overflow: hidden;
              width: 100%;
              margin: 0 auto;
              text-align: center;
              cursor: crosshair;
            }
            .chart .jumpIn {
              animation: jumpIn cubic-bezier(0.92, -0.07, 0.39, 1.6) 600ms;
              -webkit-animation: jumpIn cubic-bezier(0.92, -0.07, 0.39, 1.6) 600ms;
              transform-origin: 50% 50%;
            }
            .chart .out {
              position: absolute;
              margin-left: 40px;
            }
            .chart .out p {
              color: #000;
              font-weight: bold;
              text-align: center;
              padding-top: 10px;
              margin-bottom: 10px;
            }
            .chart .out ul {
              background-color: rgba(255, 255, 255, 0.25);
              padding-left: 0px;
              list-style-type: none;
            }
            .chart .out ul li {
              list-style-type: none;
              padding-left: 20px;
              padding-right: 20px;
              padding-bottom: 10px;
              text-align: left;
            }
            .chart .values {
              padding: 0px;
              margin: 20px 0px 20px 0px;
            }
            .chart .values li {
              display: inline-block;
              list-style: none;
              margin: 0 auto;
              padding: 0 20px;
              line-height: 1;
              font-size: 14px;
              font-weight: 600;
              text-transform: uppercase;
              letter-spacing: .05em;
            }
            .chart .values li:before {
              content: "";
              display: block;
              float: left;
              margin: 3px 0 0 -15px;
              height: 9px;
              width: 9px;
            }

      </style>




    </head>
    <body background="{{asset('img/poke_bg.jpg')}}">
      <nav class="topnav">
          <a id="home" href="/">Home</a>
          <a id="login" href="{{ route('login') }}">login</a>
      </nav>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <section class="text-center" style="padding-top:4em;">
        <h1 style="font-weight: 600; color:#fff;">{{ $data->name }}</h1>
        <div class="row" style="padding-top:3%; width: 100%;">

          <div class="col-sm-6">
            <div class="marvel-device lumia920 red" style="height:60%">
              <div class="top-bar" style="padding-top: 110%;">
                <div>
                  <form method="get" action="/show">
                    <input class="pnp" type="text" name="pokemon" placeholder="Gotcha!">
                  </form>
                  
                </div>
              </div>
              <div class="volume"></div>
              <div class="camera"></div>
              <div class="speaker"></div>
              <div class="screen" style="padding:30px;">
                <div>
                  <img style="max-height:250px;" src="{{asset("img/pokemon_web")}}/{{$data->name}}.jpg">
                  <p style="color:#000; font-size:1.5em;">
                    Type : {{$data->type_1}}
                    @if($data->type_2 != "")
                      , {{ $data->type_2}}
                    @endif
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="chart skills"></div>
          </div>
        </div>
      </section>

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



        <script>
      kindChart($('.chart.skills'), {
  web: '#fff',
  labels: ["HP", "Attack", "Defense", "Sp. Atk", "Sp. Def", "Speed"],
  datasets: [ // 0 being farthest back, 1 being closest
    {
      label: '{{ $data->name }}',
      fillColor: "rgba(255,0,0,0.7)",
      strokeColor: "rgba(0,0,0,1)",
      data: [{{$data->hp}}, {{$data->attack}}, {{$data->defense}}, {{$data->sp_atk}}, {{$data->sp_def}}, {{$data->speed}}]
    }
  ]
});










var go = true;
if(window.location.hash == '#demo'){
  setTimeout(function(){
    go = false;
  }, 9500);
}


// Heavy lifting

function kindChart(element, options) {
  var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
  svg.setAttribute('height','100%');
  svg.setAttribute('width', '100%');
  svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
  svg.setAttribute('preserveAspectRatio', 'none');
  svg.setAttribute('viewBox', '-25 -10 150 127');
  var select_circle = [];
  
  var colors = ['97,193,145','43,176,212','43,82,202','193,52,52','177,193,52','137,45,193','202,128,33','197,27,128'];
  
  //element.append('<ul class="values"></ul>');
  element.append('<div class="out"><ul></ul></div>');
  
  function getColor(passed) {
    if(passed == undefined) {
      return 'rgba('+colors[Math.floor((Math.random() * colors.length) + 0)]+',1)';
    } else {
      return passed;
    }
  }
  
  function findNewPoint(angle, distance) {
    distance = distance / 2;
    angle = angle + 270;
    result = {};

    result.y = Math.round(Math.sin(angle * Math.PI / 180) * distance + 50);
    result.x = Math.round(Math.cos(angle * Math.PI / 180) * distance + 50);
    return result;
  }
  
  
  for(var i = 0; i < options.datasets.length; i++) {
    var paths = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    var webLine = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    var webstream = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    var path = '';
    var web = '';
    var websteam_lines = [];
    var webstream_ends = [];
    var texts = [];
    
    
    
    element.find('ul.values').append('<li style="color: '+getColor(options.datasets[i].strokeColor)+';">'+ options.datasets[i].label +'</li>');
    
    for(var x = 0; x < options.datasets[i].data.length; x++) {
      
      
      if(x==0) {
        var type = 'M';
        var addition = '';
      } else if(x == options.datasets[i].data.length -1) {
        var addition = 'Z';
        var type = 'L';
      } else {
        var type = 'L';
        var addition = '';
      }
      
      var point = findNewPoint(((360/options.datasets[i].data.length) * x),options.datasets[i].data[x]);
      
      var web_points =  findNewPoint(((360/options.datasets[i].data.length) * x),100);
      
      web += ' M50 50 L'+ web_points.x + ' ' + web_points.y;
      
      path += type + point.x + ' ' + point.y + ' ' + addition;
      
      for(var l = 0; l < 5; l++) {
        var stream_point =  findNewPoint(((360/options.datasets[i].data.length) * x),((l+1)*20));
        if(x==0) { 
          websteam_lines[l] = ' M'+stream_point.x + ' '+stream_point.y;
          webstream_ends[l] = ' L'+stream_point.x + ' '+stream_point.y;
        } else if(x == options.datasets[i].data.length -1) {
          //console.log(x);
          websteam_lines[l] += ' L'+stream_point.x + ' '+stream_point.y + webstream_ends[l];
        }else {
          websteam_lines[l] += ' L'+stream_point.x + ' '+stream_point.y;
        }
        
      }
      
      //console.log(websteam_lines[0]);
    }
    
    webLine.setAttribute('d', web);
    webLine.setAttribute('stroke', options.web);
    webLine.setAttribute('stroke-width','0.1');
    
    paths.setAttribute('d', path);
    paths.setAttribute('class', 'jumpIn');
    paths.setAttribute('fill', options.datasets[i].fillColor);
    paths.setAttribute('stroke', options.datasets[i].strokeColor);
    paths.setAttribute('stroke-width', '0.25');
    
    
    var full_stream_lines = '';
    for(var l = 0; l < websteam_lines.length; l++) {
      full_stream_lines += websteam_lines[l];
    }
    //console.log(full_stream_lines);
    
    webstream.setAttribute('d', full_stream_lines);
    webstream.setAttribute('stroke', options.web);
    webstream.setAttribute('stroke-width','0.2');
    webstream.setAttribute('fill','none');
    
    svg.appendChild(webLine);
    svg.appendChild(webstream);
    svg.appendChild(paths);
    
    select_circle[i] = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
    svg.appendChild(select_circle[i]);
  }
  
  for(var x = 0; x < options.datasets[0].data.length; x++) {
    var texts = document.createElementNS('http://www.w3.org/2000/svg', 'text');
    var text = findNewPoint(((360/options.datasets[0].data.length) * x),113+(((360/options.datasets[0].data.length) * x))/90);
    texts.setAttribute('x', text.x);
    texts.setAttribute('y', text.y);
    texts.setAttribute('text-anchor', 'middle');
    texts.textContent = options.labels[x];
    texts.setAttribute('font-size','2.25');
    texts.setAttribute('fill',options.web);
    svg.appendChild(texts);
  }
  
  element.append(svg);
  
  element.mousemove(function(e){
    if(go == true){
    var objLeft = $(this).offset().left;
    var objTop = $(this).offset().top;

    var objCenterX = objLeft + $(this).width() / 2;
    var objCenterY = objTop + $(this).height() / 2;
    
    var angle = Math.atan2(e.pageX- objCenterX, - (e.pageY - objCenterY) )*(180/Math.PI);

    var angles = 360 / options.labels.length;
    n = angles*(Math.round(angle/angles));
    var out = n / (360 / options.labels.length);
    if(out == options.labels.length) { out = 0; }
    if(out < 0) {
      out = options.labels.length + out;
    }

    $(this).find('.out').css({
      left: (e.pageX - objLeft) + 40,
      top: (e.pageY - objTop) - 14
    });

    var outtext = '';
    for(var i = 0; i < options.datasets.length; i++) {
      outtext += '<li style="color: '+options.datasets[i].strokeColor+';">'+options.datasets[i].label+': '+options.datasets[i].data[out]+'</li>';
      
      var pointl = findNewPoint(((360/options.datasets[i].data.length) * out),options.datasets[i].data[out] + 1.75);
      
      select_circle[i].setAttribute('r', '1.25');
      select_circle[i].setAttribute('cx', pointl.x);
      select_circle[i].setAttribute('cy', pointl.y);
      select_circle[i].setAttribute('fill', options.datasets[i].strokeColor);
      
    }

    $(this).find('.out ul').html('<p>'+options.labels[out]+'</p>'+ outtext);
    }
    });
  element.mouseout(function(e){
    $(this).find('.out').css({
      left: 0,
      top: 0
    });
    $(this).find('.out ul').html('');
  });
}


    </script>
    </body>
</html>
