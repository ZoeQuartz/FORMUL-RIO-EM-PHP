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
            <b>Cliente</b>
            <tr>
                
                <td>
                    Nome:
                </td>
                <td>
                    <input type="text" name="nome">
                </td>
            </tr>
            <tr>
                <td>
                    CPF:
                </td>
                <td>
                    <input type="text" name="cpf">
                </td>
            </tr>
            <tr>
                <td>
                    RG:
                </td>
                <td>
                    <input type="text" name="rg">
                </td>
            </tr>
            <tr>
                <td>
                    Data de Nascimento:
                </td>
                <td>
                    <input type="date" name="data">
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>

            <tr>
                <td>
                <b>Endereço</b>
                </td>
            </tr>
        
            <tr>
                <td>
                    Rua:
                </td>
                <td>
                    <input type="text" name="rua">
                </td>
                <td>
                    Nº:
                </td>
                <td>
                    <input type="number" name="numRua">
                </td>
            </tr>
           
            <tr>
                <td>
                    Bairro:
                </td>
                <td>
                    <input type="text" name="bairro">
                </td>
                <td>
                    Estado:
                </td>
                <td>            
                <select id="estado" name= "estado">
                <option value=></option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="PA">Pará</option>
                <option value="BA">Bahia</option>
                </select>
                </td>
            </tr>
            <tr>
            <td>
                    Cidade:
                </td>
                <td>
                    <input type="text" name="cidade">
                </td>
                <td>
                    CEP:
                </td>
                <td>
                    <input type="text" name="cep">
                </td>
            </tr>
           
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                <b>Triagem PET</b>
                </td>
            </tr>
                
                <tr>                
                <td>
                    Pet:
                </td>
                <td>
                <select id="pet" name = "pet">
                <option value=></option>
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Roedor">Roedor</option>
                <option value="Peixe">Peixe</option>
                <option value="Passaro">Aves</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    Nome:
                </td>
                <td>
                    <input type="text" name="nomePet">
                </td>
                <td>
                    Raça:
                </td>
                <td>
                    <input type="text" name="raca">
                </td>
            </tr>
            <tr>
                <td>
                    Idade:
                </td>
                <td>
                    <input type="text" name="idadePet">
                </td>
            </tr>
            <tr>
                <td>
                    Porte:
                </td>
                <td>
                    <input type="text" name="porte">
                </td>
            </tr>
            <tr>
                <td>
                    Peso:
                </td>
                <td>
                    <input type="text" name="peso">
                </td>
            </tr>
            <tr>
                <td>
                    Cor:
                </td>
                <td>
                    <input type="text" name="cor">
                </td>
            </tr>







            <tr>
                <td>
                    <input type="submit" value="Cadastrar">
                </td>
                
            </tr>
        </table>    
</form>
<?php


//Recebendo Valores do html
//Cliente
$nome=$_POST['nome'];
$CPF=$_POST['cpf'];
$RG=$_POST['rg'];
$data=$_POST['data'];

//Endereço
$rua=$_POST['rua'];
$numRua=$_POST['numRua'];
$bairro=$_POST['bairro'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$CEP=$_POST['cep'];

//PET
$pet= $_POST['pet'];
$nomePet = $_POST['nomePet'];
$raca = $_POST['raca'];
$idade = $_POST['idadePet'];
$porte = $_POST['porte'];
$peso = $_POST['peso'];
$cor = $_POST['cor'];




//Criando variavel de sessao Cliente
$_SESSION['nome'] = $nome;
$_SESSION['cpf'] = $CPF;
$_SESSION['rg'] = $RG;
$_SESSION['data'] = $data;

//Criando variavel de sessao Endereco
$_SESSION['rua'] = $rua;
$_SESSION['numRua'] = $numRua;
$_SESSION['bairro'] = $bairro;
$_SESSION['estado'] = $estado;
$_SESSION['cidade'] = $cidade;
$_SESSION['cep'] = $CEP;

//Criando variavel de sessao PET
$_SESSION['pet'] = $pet;
$_SESSION['nomePet'] = $nomePet;
$_SESSION['raca'] = $raca;
$_SESSION['idade'] = $idade;
$_SESSION['porte'] = $porte;
$_SESSION['peso'] = $peso;
$_SESSION['cor'] = $cor;



?>
    
</body>
</html>