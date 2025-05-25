<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Rellena los campos siguientes</h1>
    <form action="./S1.06_lv.1_back.php" method="post">
        <label for="nombre">Tu Nombre: </label>
        <input type="text" id="nombre" name="nombre" maxlength="30" required>
        <br>
        <label for="user">Tu nombre de Usuario: </label>
        <input type="text" id="username" name="user" maxlength="40" required>
        <br>
        <button type="submit">Enviar</button>
        <input type="hidden" name="action" value="form">
    </form>
</body>
</html>