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
    <form action="pagina_eliminar_pdo.php" method="post">
   <table>
        <tr>
            <td>Codigo:</td>
            <td><input type="text" name="cod"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviando" value="Eliminar"></td>
        </tr>
    </table>
    </form>
</body>
</html>