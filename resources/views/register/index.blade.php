@extends('layouts.template')

@section('title', 'SISTEMA TIS')

@section('content')
<link rel="stylesheet" href="/css/index.css" class="rel">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    @if($flash = Session::get('exito'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>ATENCION!!!</strong> {{$flash}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="FCyT"></div>
      <h1>SISTEMA DE APOYO A LA</h1><br>
      <h1>EMPRESA "TIS"</h1><br>
      <h1>BIENVENIDO</h1><br>
  </body>
</html>

@endsection
