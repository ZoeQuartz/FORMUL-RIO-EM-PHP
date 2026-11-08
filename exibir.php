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
                    Nome:
                </td>
                <td>
                    <?php echo $_SESSION['nome']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Data:
                </td>
                <td>
                    <?php  echo $_SESSION['data'];?>
                </td>
            </tr>
             <tr>
                <td>
                    CPF:
                </td>
                <td>
                    <?php  echo $_SESSION['cpf'];?>
                </td>
            </tr>
             <tr>
                <td>
                    RG:
                </td>
                <td>
                    <?php  echo $_SESSION['rg'];?>
                </td>
            </tr>
              <tr>
                <td>
                    Rua:
                </td>
                <td>
                    <?php  echo $_SESSION['rua'];?>
                </td>
            </tr>
              <tr>
                <td>
                    Numero:
                </td>
                <td>
                    <?php  echo $_SESSION['numRua'];?>
                </td>
            </tr>
              <tr>
                <td>
                    Bairro:
                </td>
                <td>
                    <?php  echo $_SESSION['bairro'];?>
                </td>
            </tr>
              <tr>
                <td>
                    Estado:
                </td>
                <td>
                    <?php  echo $_SESSION['estado'];?>
                </td>
            </tr>
              <tr>
                <td>
                    Cidade:
                </td>
                <td>
                    <?php  echo $_SESSION['cidade'];?>
                </td>
            </tr>
              <tr>
                <td>
                    CEP:
                </td>
                <td>
                    <?php  echo $_SESSION['cep'];?>
                </td>
            </tr>
        </table>    
</form>

    
</body>
</html>