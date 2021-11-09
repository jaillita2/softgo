@extends('layouts.template')

@section('title', 'Material de apoyo')

@section('content')
<link rel="stylesheet" href="/css/usuario.css" class="rel">

<form class="form-register" method="post" action="{{ url('usersGrupo.store') }}">

    <h1>Registro empresa</h1>
    @csrf
    <?php 
        if(isset($_POST['NOMBRE'])){
            $EMAIL = $_POST['EMAIL'];
            $NAME= $_POST['NAME'];

            $campos = array();
 
                if($EMAIL == "" || strpos($EMAIL, "@") === false){
                    array_push($campos, "ingresa un correo electronico valido");
                    if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)){
                        echo "<p class='error'>* email incorrecto </p";
                    }
                }

                if($NAME == ""){
                    array_push($campos, "el campo nombre no puede  vacio");
                    if(strlen($NAME) < 20){
                        echo "<p class='error'>* el nombre es muy largo </p";
                        if(is_numeric($NAME)){
                            echo "<p class='error'>* no esta permitido numeros </p";
                        }
                    }
                }
                if(count($campos) > 0){
                    echo "<div class='error'>";
                    for($i = 0; $i < count($campos); $i++){
                        echo "<li>".$campos[$i]."</div>";
                    }
                }else{
                    echo "<div class='correcto'>
                            datos correctos";
                }
                echo "</div>";
            }
              

    ?> 
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