<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location: ../../../demos/dark/login.html');
}

include '../config.php';

$hidden = $_POST['hidden'];


    $stmt = $conn->prepare("SELECT * FROM stockage where Id_Compte_Stockage = '".$_SESSION['sess_id']."' AND Id_Stockage = '".$hidden."'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(($stmt->fetchAll()) as $k=>$v) {
      echo $v['Data_Stockage'];

      if(unlink("C:/wamp64/www/file_manager/html/assets/php/stockage/".$v['Data_Stockage']."")){
        echo("Ca marche");

    }else{
        echo("Ca marche pas");
    }
    }

  $sql = "DELETE FROM stockage WHERE Id_Compte_Stockage = ".$_SESSION['sess_id']." AND Id_Stockage = ".$hidden."";
$conn->exec($sql);

header("location:../../../demos/dark/files.php");


?>