<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:300px;
            margin:auto;
            background-color:#FFC;
            border:2px solid #F00;
            padding:5px;
        }

        td{
            text-align:center;
        }
    </style>

</head>
<body>
    <form action="pagina_insertar_pdo.php" method="post">
   <table>
        <tr>
            <td>Codigo:</td>
            <td><input type="text" name="cod"></td>
        </tr>
        <tr>
            <td>Seccion:</td>
            <td><input type="text" name="secc"></td>
        </tr>
        <tr>
            <td>Articulo:</td>
            <td><input type="text" name="art"></td>
        </tr>
        <tr>
            <td>Precio:</td>
            <td><input type="text" name="prec"></td>
        </tr>
        <tr>
            <td>Fecha:</td>
            <td><input type="text" name="fec"></td>
        </tr>
        <tr>
            <td>Importado:</td>
            <td><input type="text" name="impo"></td>
        </tr>
        <tr>
            <td>Pais:</td>
            <td><input type="text" name="porig"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviando" value="Agregar"></td>
        </tr>
    </table>
    </form>
</body>
</html>