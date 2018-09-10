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
   <?php 
      if(isset($_GET['edit'])){
    $cat_id=$_GET['edit'];
    include ("update_cat2.php");
    
}
    
    ?>

</div>
    
      </div>
<div class="col-md-12"> 
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Text</th>
        <th>Image</th>
         
      </tr>    
    </thead>
    <tbody>
        <?php
        
           $query="SELECT * FROM cat2";
        $category=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($category)){
            $categories =$row['title'];
            $cat_text =$row['text'];
            $cat_id =$row['id'];
            $img=$row['img'];
            
        
        
        echo "<tr>";
        echo "<td>$cat_id </td>";
        echo "<td>$categories </td>";
        echo "<td>$cat_text </td>";
        echo "<td><img src='../$img' style='width:100%'> </td>";
        echo "<td><a href='cat2.php?edit={$cat_id}'>Izmijeni</a> </td>";
        echo "</tr>";
       
        
        }  
        
        ?>
       
         
          </tbody>
    
    
    
    </table>
    
      </div>
   
    
       
  </div>
  
<?php include("footer_admin.php") ?>