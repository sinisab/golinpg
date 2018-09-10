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
  
 
    <form class="form-inline" action="clients_admin.php" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
      
      <input type="file" class="form-control" id="addpic" placeholder="lokacija slike" name="addpic">
   
    </div>
    <button class="btn btn-success" type="submit" name="dodaj" class="btn btn-success" >DODAJ SLIKU</button>
        
          
  </form>
      
      
       <?php
        
        if(isset($_POST['dodaj'])){
            $nova_slika=$_FILES['addpic']['name'];
            
            $nova_slika_tmp=$_FILES['addpic']['tmp_name'];
            
            move_uploaded_file($nova_slika_tmp,"../fotkeclients/$nova_slika");
           $query ="INSERT INTO clients(img)";
              $query .="VALUES('Fotkeclients/{$nova_slika}')";
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
        <th>ID</th>
         
      </tr>    
    </thead>
    <tbody>
        <?php
        $query="SELECT * FROM clients";
        $clients=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($clients)){
            $slika =$row['img'];
            $client_id=$row['id'];
    
        echo "<tr>";
        echo "<td><img  src='../$slika' > </td>";
        echo "<td>$client_id </td>";
        echo "<td><a href='clients_admin.php?delete={$client_id}'>Izbrisi</a> </td>";
        echo "</tr>";
        
        }  
         ?>
        <?php
        if(isset($_GET['delete'])){
            $delete_clients=$_GET['delete'];
            $query="DELETE FROM clients WHERE id={$delete_clients}";
            $delete_query=mysqli_query($connection,$query);
            header("Location: clients_admin.php");
            
            
        }
        
           ?>
       
          </tbody>
    
    
    
    </table>
    
      </div>
   
    
       
  </div>
  
<?php include("footer_admin.php") ?>