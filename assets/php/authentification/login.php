<?php 
session_start();
include("../config.php");
?>
<?php


  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $password = hash('sha256',$password);
  if($email != "" && $password != "") {
    try {
      $query = "select * from compte where Email_Compte=:email and Password_Compte=:password";
      $stmt = $conn->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /** Your code ***/
        $_SESSION['sess_id']   = $row['Id_Compte'];
        $_SESSION['sess_email'] = $row['Email_Compte'];
        $_SESSION['sess_nom'] = $row['Nom_Compte'];
        $_SESSION['sess_prenom'] = $row['Prenom_Compte'];
        $_SESSION['sess_datenais'] = $row['DateNais_Compte'];
        $_SESSION['sess_tel'] = $row['Tel_Compte'];
        $_SESSION['sess_cp'] = $row['Cp_Compte'];
        $_SESSION['sess_ville'] = $row['Ville_Compte'];
        $_SESSION['sess_region'] = $row['Region_Compte'];
        $_SESSION['sess_pays'] = $row['Pays_Compte'];
        $_SESSION['sess_adresse1'] = $row['Adresse1_Compte'];
        $_SESSION['sess_adresse2'] = $row['Adresse2_Compte'];

        if(file_exists("../stockage/file/".$_SESSION['sess_id']."") == 0){
          mkdir("../stockage/file/".$_SESSION['sess_id']."");
        }

        header('Location:../../../demos/dark/index.php');
      
      } else {
        $msg = "Invalid email and password!";
        header('Location:../../../demos/dark/login.html');
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
    
  }

?>