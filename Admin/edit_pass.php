<?php include("header_admin.php"); ?>

<?php




if (isset($_POST['submit'])){
   
    
    $newpass=$_POST['novipass'];
    $newpass=password_hash($newpass, PASSWORD_BCRYPT, array('cost'=>12));
    $query2="UPDATE users SET user_pass='{$newpass}' WHERE user_name = '{$_SESSION['username']}'";
    $promijenisifru=mysqli_query($connection,$query2);
    if(!$promijenisifru){
        die ('UPIT POGRESAN'.mysqli_error($connection));
    }
    
    
    
}


?>

<div class="wrapper">

 <?php include("nav_top.php");?>
</div>

  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Promjena lozinke
         
       
      </h1>
      
    </section>
<div class="col-md-12"> 
    <div class="container">
  
  <form class="form-inline" action="edit_pass.php" method="post">
      <div class="row col-md-2 col-md-offset-4">
          <p style="text-align:center">Promjena lozinke:</p>
    
    <div class="form-group">
      
      <input type="password" class="form-control" id="pwd" placeholder="unesite novu sifru" name="novipass">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Promijeni sifru</button>
         
          </div>
  </form>

</div>
    
      </div>
    
       
  </div>
  
<?php include("footer_admin.php") ?>