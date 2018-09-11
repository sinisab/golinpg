<?php include "db.php"; ?>
<?php session_start(); ?>
<?php 


if(isset($_POST['login'])){
    
    $username=mysqli_real_escape_string($connection,$_POST['username']);
    $password=mysqli_real_escape_string($connection, $_POST['password']);
    
   $query="SELECT * FROM users WHERE user_name = '{$username}'";
    $select_user_query=mysqli_query($connection, $query);
    if(!$select_user_query){
        
        die("Zahtjev pogresan".mysqli_error($connection));
    }
    
    while($row=mysqli_fetch_array($select_user_query)){
         $db_username=$row['user_name'];
         $db_pass=$row['user_pass'];
         $db_user_role=$row['user_role'];
    }
    $password=crypt($password,$db_pass);
if($username!==$db_username&&$password!==$db_pass){
    header("Location: forma.php");

}
else if(($username==$db_username)&&($password==$db_pass)){
    $_SESSION['username']=$db_username;
    $_SESSION['password']=$db_pass;
    $_SESSION['user_role']=$db_user_role;
    
    header("Location: Admin/index.php");
} else {
    header("Location: forma.php");
}
    
}




?>

