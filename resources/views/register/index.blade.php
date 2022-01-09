@extends('layouts.template')

@section('title', 'SISTEMA TIS')

@section('content')
<link rel="stylesheet" href="/css/index.css" class="rel">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
    
    <div id="main-carousel" class="carousel slide mt-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1"></li>
        <li data-target="#main-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>Bienvenido a la pagina principal</h2>
          <h2>SISTEMA DE APOYO A LA</h2>
          <h2>EMPRESA "TIS"</h2><br>
        </div>
        <div class="carousel-item">
          <h2>Gestiona todo aspecto relacionado con la materia de "TIS"</h2>
        </div>
        <div class="carousel-item">
          <h2>Sube tus propias propuestas</h2>
        </div>
      </div>
      <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </body>
</html>

@endsection