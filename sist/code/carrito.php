

<?php
session_start();

// Verifica si el usuario está logueado
if(!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Verifica si se ha enviado el formulario para agregar un producto al carrito
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si el ID del producto y la cantidad se han proporcionado correctamente
    if(isset($_POST['id_producto']) && isset($_POST['cantidad'])) {
        $id_producto = $_POST['id_producto'];?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Tienda Online</title>
    <style>
        /* Aquí puedes agregar estilos CSS para tu encabezado */
        /* Por ejemplo: */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
}

        </style>

</head>

</html>