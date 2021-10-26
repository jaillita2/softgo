<?php
    if(isset($_POST['submit'])){
        if(empty($user_name)){
            echo "<p class='error'>* Agregar nombre usuario </p";
            if(strlen($user_name) > 30){
                echo "<p class='error'>* el nombre de usuario es muy largo </p";
                if(is_numeric($user_name)){
                    echo "<p class='error'>* no esta permitido numeros </p";
                }
            }
        }
        if(empty($id_user)){
            echo "<p class='error'>* agregar codigo sis  </p";
            if(!is_numeric($id_user) > 9){
                echo "<p class='error'>* codigo sis incorrecto </p";
            }
        }
        if(empty($passwd_user)){
            echo "<p class='error'>* agregar password </p";
        }
        if(empty($email)){
            echo "<p class='error'>* agregar email </p";
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* email incorrecto </p";
            }
        }
        if(empty($last_name)){
            echo "<p class='error'>* agregar apellidos </p";
            if(strlen($last_name) < 30){
                echo "<p class='error'>* apellidomuy largo </p";
                if(is_numeric($last_name)){
                    echo "<p class='error'>* no esta permitido numeros </p";
                }
            }
        }
        if(empty($name)){
            echo "<p class='error'>* agregar nombre </p";
            if(strlen($name) < 20){
                echo "<p class='error'>* el nombre es muy largo </p";
                if(is_numeric($name)){
                    echo "<p class='error'>* no esta permitido numeros </p";
                }
            }
        }
    }
?>