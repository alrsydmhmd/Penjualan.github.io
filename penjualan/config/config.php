<?php
session_start();
require('database.php');

$uri        = explode('/', $_SERVER['REQUEST_URI']);

$base_url = "http://127.0.0.1:8080/penjualan/";

$default_controller = 'dashboard';
$controller         = ($uri[2]) ? $uri[2] : $default_controller;
$aksi               = (isset($uri[3])) ? $uri[3] : 'index';
