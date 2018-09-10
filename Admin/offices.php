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
        Offices
      </h1>
      
    </section>
<div class="container-fluid">
  <div class="row col-md-12"> 
  
 
    <form class="form-inline" action="offices.php" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
      
      <input type="file" class="form-control" id="addpic" placeholder="lokacija slike" name="addpic">
      <input type="text" class="form-control" id="imegrada" placeholder="ime grada" name="imegrada">
    </div>
    <button class="btn btn-success" type="submit" name="dodaj" class="btn btn-success" >DODAJ SLIKU</button>
        
          
  </form>
       <?php
        
        if(isset($_POST['dodaj'])){
            $nova_slika=$_FILES['addpic']['name'];
            
            $nova_slika_tmp=$_FILES['addpic']['tmp_name'];
            $novo_ime=$_POST['imegrada'];
            move_uploaded_file($nova_slika_tmp,"../fotkeoffices/crno-bijelo/$nova_slika");
           $query ="INSERT INTO offices(image,name)";
              $query .="VALUES('Fotkeoffices/crno-bijelo/{$nova_slika}','{$novo_ime}')";
              $dodaj_sliku=mysqli_query($connection,$query);
              if(!$dodaj_sliku){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
            
        }
        
        
        ?>
      
   

</div>
    
      </div>
<div class="col-md-12"> 
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>SLIKA</th>
        <th>IME</th>
         
      </tr>    
    </thead>
    <tbody>
        <?php
        $query="SELECT * FROM offices";
        $category=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($category)){
            $slika =$row['image'];
            $ime =$row['name'];
            $office_id=$row['id'];
    
        echo "<tr>";
        echo "<td><img  src='../$slika' > </td>";
        echo "<td>$ime </td>";
        echo "<td><a href='offices.php?edit={$office_id}'>Izmijeni ime grada</a> </td>";
        echo "<td><a href='offices.php?delete={$office_id}'>Izbrisi</a> </td>";
        echo "</tr>";
        
        }  
         ?>
        <?php
        if(isset($_GET['delete'])){
            $delete_offices=$_GET['delete'];
            $query="DELETE FROM offices WHERE id={$delete_offices}";
            $delete_query=mysqli_query($connection,$query);
            header("Location: offices.php");
            
            
        }
        
        ?>
         <form method="post" action="">
       <?php 
      if(isset($_GET['edit'])){
    $offices_id=$_GET['edit'];
    include ("update_offices.php");
    
}
       ?>
        <button class="btn btn-success" type="submit" name="update" class="btn btn-success" >UPDATE</button>
        </form>
          </tbody>
    
    
    
    </table>
    
      </div>
   
    
       
  </div>
  
<?php include("footer_admin.php") ?>