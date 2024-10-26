<?php
include 'conexion.php'; 

echo "
<br>

        <br>
        <br>
        <style>
        h1 { 
            text-align: center;
            color: #000000;
        }
  
        table {
            margin: auto;
            width: 75%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 2px solid #ddd;
        }
        th {
            color: #0f307d;
            background-color: #f2f2f2;
        }
        
        footer {
            background-color: #001F3F;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: auto;
        }
      </style>
      <title>^Prueba de tabla^</title>
      ";

$titulo = "INVENTARIO AL ";
$fechaActual = date('d/m/Y');
echo "<h1>$titulo $fechaActual</h1>";


$sql = "SELECT * FROM inventario_1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID Producto</th>
                <th>Nombre del Producto</th>
                <th>Categoría</th>
                <th>Cantidad en Stock</th>
                <th>Precio Unitario</th>
                <th>Proveedor</th>
            </tr>";

    // datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID Producto"] . "</td>
                <td>" . $row["Nombre del Producto"] . "</td>
                <td>" . $row["Categoria"] . "</td>
                <td>" . $row["Cantidad en Stock"] . "</td>
                <td>" . $row["Precio Unitario"] . "</td>
                <td>" . $row["Proveedor"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Pie de página con la fecha actual
$annoActual = date('Y'); // Año actual
echo "
<br>
<footer>© $annoActual Prueba para Mauri. By Chio</footer>
<br>";

$conn->close();

