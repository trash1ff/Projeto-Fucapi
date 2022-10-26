<?php
include('conexao.php');

$nome_funcionario = $_POST['nome_funcionario'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$salario = $_POST['salario'];
$id_cargo = $_POST['id_cargo'];

echo $nome_funcionario."<br>";
echo $cpf."<br>";
echo $senha."<br>";
echo $salario."<br>";
echo $id_cargo."<br>";

$result = "INSERT INTO funcionario(senha,nome_funcionario,cpf,salario,id_cargo) VALUES (".$senha.",'".$nome_funcionario."','".$cpf."',".$salario.",".$id_cargo.");";

if(mysqli_query($mysqli, $result)){
  echo "Sucesso !";
}
else{
  echo "Erro";
}

header("location:lista.php");
?>

