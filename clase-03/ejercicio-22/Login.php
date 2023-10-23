<?php


require_once("./modelo/Usuario.php");


echo Usuario::Login($_POST["clave"], $_POST["mail"]);
