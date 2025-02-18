<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
</head>
<body>
    <h1>Formulari d'entrada</h1>
    <form action="back.php" method="post">
        <label class="name">Nom: </label>
        <input type="text" name="nombre" id="nombre" maxlength="20" required>
        <br>
        <label class="apodo">Apodo: </label>
        <input type="text" name="apodo" id="apodo" maxlength="15" required>
        <br>        
        <button type="submit">ENVIAR</button>
        <input type="hidden" name="action" value="form">
    </form>
</body>
</html>