<?php
session_start();
//Limpa variavel
session_unset();
session_destroy();
header('location: login.php');
