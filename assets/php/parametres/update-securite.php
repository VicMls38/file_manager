<?php

try{
include '../config.php';
}catch(PDOException $e){
    header("location:../../../demos/dark/404.html");
}

session_start();

if(!isset($_POST["pwd"]) || !isset($_POST["old_pwd"]) || !isset($_POST["re_pwd"])){
    //header("location:../../../demos/dark/settings.php");
}else{


$old_pwd = trim($_POST['old_pwd']);
$old_pwd = hash('sha256',$old_pwd);
$pwd = trim($_POST['pwd']);
$password = hash('sha256',$pwd);
$re_pwd = trim($_POST['re_pwd']);
$re_pwd = hash('sha256',$re_pwd);

if(($password=="" || $old_pwd=="" || $re_pwd=="")){
    //header("location:../../../demos/dark/settings.php");
}
if($password != $re_pwd){
    //header("location:../../../demos/dark/settings.php");
}else{

    try{
        $query = "SELECT Password_Compte from compte where  Id_compte=:id_compte";
        $stmt = $conn->prepare($query);
        $stmt->bindParam('id_compte', $_SESSION['sess_id'], PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);

        if($count == 1 && !empty($row)) {
            if($old_pwd != $row['Password_Compte']){
                //header("location:../../../demos/dark/settings.php");
            }else{

            try{
                $sql = "UPDATE compte SET Password_Compte = '".$password."' WHERE Id_Compte = '".$_SESSION['sess_id']."'";
                // use exec() because no results are returned
                $conn->exec($sql);
                //echo "New record created successfully";
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }
          
            //header('Location:../../../demos/dark/settings.php');
          } 

        //header("location:../../../demos/dark/settings.php");
        }else {
            $msg = "Invalid old password!";
            //header('Location:../../../demos/dark/settigs.php');
          }
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }

    


}





}
?>