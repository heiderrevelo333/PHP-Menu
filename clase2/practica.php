<!-- crear un menu de 5 productos en html con su respectivo valor luego relaizar un formulario, pidiendo numero de menu cantidad de menu. imprimir el nombre del menu seleccionadoo, su cantidad su balor unitario y su valor total en un tabla. control k y control c para comentar --> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h1 {
            color: #333;
        }
        h3 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            text-align: baseline;
            text-align: center;
            margin: 5px 0;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color:rgb(18, 180, 216);
        }
        input[type="number"] {
            width: 50px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>menu de productos</h1>
    <ul>
        <li>menu 1: hamburguesa $40.000</li>
        <li>menu 2: pizza $35.000</li>
        <li>menu 3: hotdog $10.000</li>
        <li>menu 4: ensalada $8.000</li>
        <li>menu 5: refresco $2.000</li>
    </ul>
    
    <form method="post" action="">
        <label for="numero">Número de menú (1-5):</label>
        <input type="number" name="numero" id="numero" min="1" max="5" required>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" required>
        <input type="submit" value="Calcular">
    </form>
        <?php
    $productos = [
        1 => ["nombre" => "Hamburguesa", "precio" => 40000],
        2 => ["nombre" => "Pizza", "precio" => 35000],
        3 => ["nombre" => "Hot Dog", "precio" => 10000],
        4 => ["nombre" => "Ensalada", "precio" => 8000],
        5 => ["nombre" => "Refresco", "precio" => 2000],
    ];

    if (isset($_POST['numero']) && isset($_POST['cantidad'])) {
        $num = (int)$_POST['numero'];
        $cant = (int)$_POST['cantidad'];
        if (isset($productos[$num])) {
            $nombre = $productos[$num]['nombre'];
            $precio = $productos[$num]['precio'];
            $total = $precio * $cant;
            echo "<h3>Detalle de la compra</h3>";
            echo "<table border='1' cellpadding='5'>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Valor Unitario</th>
                        <th>Valor Total</th>
                    </tr>
                    <tr>
                        <td>$nombre</td>
                        <td>$cant</td>
                        <td>$$precio</td>
                        <td>$$total</td>
                    </tr>
                </table>";
        } else {
            echo "<p>Número de menú inválido.</p>";
        }
    }
    ?>
</body>
</html>