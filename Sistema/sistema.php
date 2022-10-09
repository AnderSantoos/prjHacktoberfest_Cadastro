<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];
$funcao = $_POST['funcao'];


 
echo ("Os dados cadastrados foram: <br>");
echo ("Nome: $nome <br>");
echo ("E-mail: $email <br>");
echo ("Senha: $senha <br>");

if($genero == "Masculino")
{
    echo ("Gênero: Masculino");
}
else if($genero == "Feminino")       

{
    echo ("Gênero: Feminino");
}
else
{
    echo ("Gênero: Outros");
}

if($funcao == "Admin"){
    echo ("Função: Administrativo <br>");
}else if($funcao == "Alu"){
    echo ("Função: Aluno <br>");
}else{
    echo ("Função: Professor <br>");
}
?>