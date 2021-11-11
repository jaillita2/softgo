@extends('layouts.template')

@section('title', 'Grupo-Empresa')

@section('content')
<link rel="stylesheet" href="/css/usuario.css" class="rel">

<form class="form-register" method="post" action="{{ url('usersGrupo.store') }}">

    <h1>Registro empresa</h1>
    @csrf
    <label for="NAME_EMP"> Nombre de empresa: </label><br>
    <input class="controls" type="text" name="NAME_EMP" id="empname" placeholder="SofGo" value="{{ old('NAME_EMP')}}"><br>


    <label for="EMAIL"> Correo electronico: </label><br>
    <input class="controls" type="email" name="EMAIL" id="email" placeholder="juanperez@example.com" value="{{ old('EMAIL')}}">
    <br>

    <label for="DIRECCION"> Direccion: </label><br>
    <input class="controls" type="text" name="DIRECCION" id="direccion" placeholder="Av. Melchor Pinto" value="{{old('DIRECCION')}}">
    <br>

    <label for="TELEFONO"> Telefono: </label><br>
    <input class="controls" type="text" name="TELEFONO" id="telefono" placeholder="+59172758959" value="{{ old('TELEFONO')}}">
    
    <button type="submit">Crear usuario</button>
    <button type="submit">Cancelar</button>
    <br>
</form>
<br>
@endsection