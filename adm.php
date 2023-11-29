<?php
require_once("cabecalho.php");
session_start();
var_dump($_SESSION['id']);
var_dump($_SESSION['nome']);
var_dump($_SESSION['email']);
