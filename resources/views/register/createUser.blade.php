@extends('layouts.template')

@section('title', 'Registro')

@section('content')
   
<link rel="stylesheet" href="/css/usuario.css" class="rel">

        <form class="form-register" method="post" action="{{ url('users') }}">

            <h1>Nueva cuenta</h1>
            <h4>Crear un nuevo usuario y contraseña para acceder al sistema</h4>
            @csrf
            <?php 
                if(isset($_POST['NOMBRE'])){
                    $NAME_USER = $_POST['NAME_USER'];
                    $ID_USER = $_POST['ID_USER'];
                    $PASSWD_USER = $_POST['PASSWD_USER'];
                    $EMAIL = $_POST['EMAIL'];
                    $LAST_NAME = $_POST['LAST_NAME'];
                    $NAME= $_POST['NAME'];

                    $campos = array();

                        if($NAME_USER == ""){
                            array_push($campos, "el campo nombre no puede  vacio");
                            if(strlen($NAME_USER) > 30){
                                echo "<p class='error'>* el nombre de usuario es muy largo </p";
                                if(is_numeric($NAME_USER)){
                                    echo "<p class='error'>* no esta permitido numeros </p";
                                }
                            }
                        }
                        if($ID_USER == ""){  
                            array_push($campos, "el campo id_user no puede estar vacio");
                            if(empty($ID_USER)){
                                echo "<p class='error'>* agregar codigo sis  </p";
                                 if(!is_numeric($ID_USER) > 9){
                                    echo "<p class='error'>* codigo sis incorrecto </p";
                                }   
                             }
                        } 
                        if($PASSWD_USER == "" || strlen($PASSWD_USER) < 9){
                            array_push($campos, "el campo password no puede estar vacio, ni tener menos de 9 caracteres");
                        }
                        if($EMAIL == "" || strpos($EMAIL, "@") === false){
                            array_push($campos, "ingresa un correo electronico valido");
                            if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)){
                                echo "<p class='error'>* email incorrecto </p";
                            }
                        }
                        if($LAST_NAME == ""){
                            array_push($campos, "el campo apellido no puede  vacio");
                            if(strlen($LAST_NAME) < 30){
                                echo "<p class='error'>* apellido muy largo </p";
                                if(is_numeric($LAST_NAME)){
                                    echo "<p class='error'>* no esta permitido numeros </p";
                                }
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
            <label for="NAME_USER"> Nombre de usuario: </label><br>
            <input class="controls" type="text" name="NAME_USER" id="username" placeholder="Juan_Perez" value="{{ old('ID_USER')}}"><br>
            
            <label for="ID_USER"> Código Sis: </label><br>
            <input class="controls" type="text" name="ID_USER" id="username" placeholder="2020598923" value="{{ old('ID_USER')}}"><br>

            <label for="PASSWD_USER"> Contraseña: </label><br>
            <input class="controls" type="password" name="PASSWD_USER" id="passwd" placeholder="Constraseña..." value="{{ old('PASSWD_USER')}}">
            <br>


            <label for="EMAIL"> Dirección de correo: </label><br>
            <input class="controls" type="email" name="EMAIL" id="email" placeholder="juanperez@example.com" value="{{ old('EMAIL')}}">
            <br>

            <label for="LAST_NAME"> Apellido(s): </label><br>
            <input class="controls" type="text" name="LAST_NAME" id="last_name" placeholder="Perez Maldonado" value="{{old('LAST_NAME')}}">
            <br>

            <label for="NAME"> Nombre: </label><br>
            <input class="controls" type="text" name="NAME" id="name" placeholder="Juan Pablo" value="{{ old('NAME')}}">
            
            <button type="submit">Crear usuario</button>
            <button type="submit">Cancelar</button>
            <br>
        </form>
        <br>
@endsection

