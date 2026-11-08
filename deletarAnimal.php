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
                    Qual campo deseja deletar ?
                </td>
                <td>
                    <input type="radio" name="var" value="tipo">Tipo do Pet
                    <input type="radio" name="var" value="nome">Nome do Pet
                    <input type="radio" name="var" value="raca">Raça
                    <input type="radio" name="var" value="idade">Idade
                    <input type="radio" name="var" value="porte">Porte
                    <input type="radio" name="var" value="peso">Peso
                    <input type="radio" name="var" value="cor">Cor
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Deletar">
                </td>
            </tr>
        </table>    
</form>
<?php
//Recebe valores do html
$var=$_POST['var'];

//Verificar
if($var=='tipo'){
    unset($_SESSION['pet']); //"unset" usado para apagar apenas uma variavel de sessao
}
elseif($var=='nome'){
    unset($_SESSION['nomePet']);
}
elseif($var=='raca'){
    unset($_SESSION['raca']);
}
elseif($var=='idade'){
    unset($_SESSION['idade']);
}
elseif($var=='porte'){
    unset($_SESSION['porte']);
}
elseif($var=='peso'){
    unset($_SESSION['peso']);
}
elseif($var=='cor'){
    unset($_SESSION['cor']);
}
else{
    echo "Escolha uma opção";
}
?>

    
</body>
</html>