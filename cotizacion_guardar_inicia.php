<?php
$nombre_del_cliente_post = strtoupper($_POST['nombre_del_cliente']);
$descripcion_coche_post = strtoupper($_POST['descripcion_coche']);
$fecha_actual_post = $_POST['fecha_actual'];
session_start();
$_SESSION['nombre_cliente'] = $nombre_del_cliente_post;
$_SESSION['descripcion_coche'] =$descripcion_coche_post;
$_SESSION['fecha_actual']=$fecha_actual_post;

header('Location: cotización_en_curso.php');