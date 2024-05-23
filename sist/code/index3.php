Estructura  página login.php <?php
session_start();

// Verifica si el usuario ya está logueado, si lo está, redirige a la página principal
if(isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Verifica si se envió el formulario de login
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si el usuario y la contraseña son correctos (esto es solo un ejemplo básico)
    $usuario = "usuario_ejemplo";
    $contraseña = "contraseña_ejemplo";

    if($_POST['usuario'] == $usuario && $_POST['contraseña'] == $contraseña) {
        // Inicia sesión y redirige a la página principal
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="contraseña">Contrasena:</label>
        <input type="password" name="contraseña" id="contraseña" required><br><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>