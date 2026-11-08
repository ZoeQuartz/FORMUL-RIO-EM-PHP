<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
$nome='Jackson'
?>


<form mothod="post">
<input type="text" name="nome" value=<?php echo $_SESSION['nome'];?>> <!--exibindo-->
<input type="text" name="data" value=<?php echo $_SESSION['data'];?>>   <!--exibindo-->
<input type="submit" name="Alterar">


<?php
//recadastro
$_SESSION['nome']=$_POST['nome'];
$_SESSION['nome']=$_POST['nome'];
?>
    
</body>
</html>