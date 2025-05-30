</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Password" name="password">
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        if (trim($name)==="") {
            echo "<h1>El nombre no puede estar vacio</h1>";
        } 
        elseif (trim($password)==="") {
            echo "<h1>no hay datos en la contraseña</h1>";
        }else {
            echo "<h1>Hola $name</h1>";
        }
    }else {
        echo "<h1>no hay datos...</h1>";
        }
    ?>
</body>
</html>