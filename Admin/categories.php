<?php include("functions.php"); ?>
<?php ob_start();?>
<?php include("header_admin.php"); ?>

<div class="wrapper">

 <?php include("nav_top.php");?>
</div>

  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-bottom:20px">
      <h1>
        Kategorije
        
      </h1>
      
    </section>
<div class="container-fluid">
  <div class="row col-md-12"> 
  
  
      <?php ubaci_kategorije();  ?>
    <form class="form-inline" action="categories.php" method="post">
   
    <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="ime kategorije" name="addcat">
      <input type="text" class="form-control" id="addcat" placeholder="url adresa" name="url">
    </div>
    <button class="btn btn-danger" type="submit" name="submit" class="btn btn-success" >DODAJ KATEGORIJU</button>
         
          
  </form>
   <?php 
      if(isset($_GET['edit'])){
    $cat_id=$_GET['edit'];
    include ("update_categories.php");
    
}
    
    ?>

</div>
    
      </div>
<div class="col-md-12"> 
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Kategorije</th>
        <th>ID</th>
         
      </tr>    
    </thead>
    <tbody>
        <?php nadji_sve_kategorije();  ?>
        <?php izbrisi_kategorije(); ?>
         
          </tbody>
    
    
    
    </table>
    
      </div>
   
    
       
  </div>
  
<?php include("footer_admin.php") ?>