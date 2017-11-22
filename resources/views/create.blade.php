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
        <form action="/console/data" method="post">
            {{ csrf_field() }}
            <input class="form-control" type="text" value="" name="no" placeholder="no">
            <input class="form-control" type="text" value="" name="name" placeholder="name">
            <input class="form-control" type="text" value="" name="type_1" placeholder="type_1">
            <input class="form-control" type="text" value="" name="type_2" placeholder="type_2">
            <input class="form-control" type="text" value="" name="total" placeholder="total">
            <input class="form-control" type="text" value="" name="hp" placeholder="hp">
            <input class="form-control" type="text" value="" name="attack" placeholder="attack">
            <input class="form-control" type="text" value="" name="defense" placeholder="defense">
            <input class="form-control" type="text" value="" name="ap_atk" placeholder="ap_atk">
            <input class="form-control" type="text" value="" name="sp_def" placeholder="sp_def">
            <input class="form-control" type="text" value="" name="speed" placeholder="speed">
            <input class="form-control" type="text" value="" name="generation" placeholder="generation">
            <input class="form-control" type="text" value="" name="legendary" placeholder="legendary">
            <input type="submit" value="Update">
        </form>
    </div>
</div>
</body>
</html>