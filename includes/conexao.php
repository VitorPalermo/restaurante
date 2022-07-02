<?php
// host = variavel.    localhost = valor da variavel
define('HOST','localhost');
define('USUARIO','root');
define('SENHA','');
define('DB','db_restaurante');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB)
or die ('não foi possivel conectar'); 