<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: auto;
            width: 450px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="datosImagen.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="userFile">Imagen:</label>
                </td>
                <td>
                    <input type="file" name="userFile" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>