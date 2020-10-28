<?php 
 session_start();
 require_once('Database.php');
     $pdo = Database::conexao();


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$consulta = $pdo->query("SELECT p.*, u.* FROM pessoa as p JOIN usuario as u ON u.id_pessoa = p.id_pessoa WHERE u.usuario = '$usuario' AND u.senha = $senha;");

 $count = $consulta->rowCount();

 $usuario = $consulta->fetch(PDO::FETCH_OBJ);

 $_SESSION['id_pessoa'] = $usuario->id_pessoa;
 

   if($count>0){
   				header('Location: ../../index.php');
    }else{
    	header('Location: ../../login.php');
    }








