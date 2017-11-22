<!doctype html>
<html lang="en">
  <head>
    <title>Pokémon</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/hovereffect.css') }}" rel="stylesheet"> -->
  </head>
  <body>
    <div class="container">
    <div class="row">
    <form action="/console/data/{{ $data->id }}" method="post">
        {{ csrf_field() }}
            <input class="form-control" type="text" value="{{ $data->no }}" name="no">
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
            <input class="form-control" type="text" value="{{ $data->legendary }}" name="legendary">
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" value="Update">
        </form>
    </div>
    </div>
  </body>
</html>