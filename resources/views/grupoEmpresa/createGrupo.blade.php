@extends('layouts.template')

@section('title', 'Grupo-Empresa')

@section('content')
<link rel="stylesheet" href="/css/especificaciones.css" class="rel">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style ="min-height:10000px">
.dropbtn {
  background-color: rgb(145, 202, 224);
  color: #000000;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgb(145, 202, 224);
  min-width: 300px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
      font-family: 'Fjalla One';

}

.dropdown-content a {
  color: #000000;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(50, 155, 187);}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: rgb(145, 202, 224);}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">≡</button>
  <div class="dropdown-content">
      
                    <li><a href="{{ url('Propuesta') }}"> Propuesta</a></li>
                    <li><a href="{{ url('Pagos') }}"> Plan de Pagos</a></li>
                    <li><a href="{{ url('Listar') }}"> Listar Documentos</a></li>
                    <li><a href="{{ url('Listarr') }}"> Listar Especificaciones</a></li>
                    <li><a href="{{ url('Cursos') }}"> Registrarse con un consultor</a></li>
                    <li><a href="{{ url('Lista') }}"> listar Grupo-Empresa</a></li>
                    <li><a href="{{ url('Plani') }}"> Calendario</a></li>
                
  </div>
</div>

</body>
<div class="container">
<form action="{{route('Grupo.store')}}" method="post" enctype="multipart/form-data">
    <h1>Registro de Grupo-Empresa</h1>
        @csrf
        <div class="form-group">
            <label for="NAME_EMP">Nombre de empresa:</label><br>
            <input type="text" class="form-control" id="nombre_emp" name="NAME_EMP" placeholder="Ingrese el Nombre de la empresa" value="{{old('NAME_EMP')}}">
            @error('NAME_EMP')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="EMAIL_DOCE">Correo electronico:</label><br>
            <input type="email" class="form-control" id="emailDoce" name="EMAIL_DOCE" placeholder="Ingrese el Email" value="{{old('EMAIL_DOCE')}}">
            @error('EMAIL_DOCE')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="DIRECCION">Direccion:</label><br>
            <input type="text" class="form-control" id="direccion" name="DIRECCION" placeholder="Ingrese la Direccion" value="{{old('DIRECCION')}}">
            @error('DIRECCION')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="TELEFONO">Telefono:</label><br>
            <input type="text" class="form-control" id="telefono" name="TELEFONO" placeholder="+59171618999" value="{{old('TELEFONO')}}">
            @error('TELEFONO')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div>  
        <div class="form-group">
            <label for="ENC_GR">Representante:</label><br>
            <input type="text" class="form-control" id="enc_gr" name="ENC_GR" placeholder="Encargado de grupo" value="{{old('ENC_GR')}}">
            @error('ENC_GR')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            <label for="ENC_GR"></label>
        </div>
        <div class="form-group ">
            <label for="SOCIOS">Socios:</label><br>
            <textarea class="form-control" id="socios" name="SOCIOS" placeholder="Juan Pablo Ibañez Soto" rows="8"></textarea>
            @error('SOCIOS')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
        </div> 

    <div class="form-group ">
            <button class="btn btn-success" id="btnAgregar">Guardar</button>
            <button type="button" class="btn btn-primary" onclick="location.href ='/'">Cancelar</button>
        </div>


    </form>
</div>
@endsection