<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php session_start(); ?>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    Pet:
                </td>
                <td>
                    <?php echo $_SESSION['pet']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <?php  echo $_SESSION['nomePet'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Raça:
                </td>
                <td>
                    <?php  echo $_SESSION['raca'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Idade:
                </td>
                <td>
                    <?php  echo $_SESSION['idade'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Porte:
                </td>
                <td>
                    <?php  echo $_SESSION['porte'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Peso:
                </td>
                <td>
                    <?php  echo $_SESSION['peso'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Cor:
                </td>
                <td>
                    <?php  echo $_SESSION['cor'];?>
                </td>
            </tr>
        </table>    
</form>

    
</body>
</html>