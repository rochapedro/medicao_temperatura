<?php
require_once ('app/session.php');

if($id_pessoa){

header('Location: view/index.php');
}else{

header('Location: login.php');
}

?>