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

<div class="col-md-12"> 
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Naslov</th>
        <th>Tekst</th>
        <th>Slika</th>
         
      </tr>    
    </thead>
    <tbody>
        <?php
        $query="SELECT * FROM cat1";
        $category=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($category)){
            $naslov =$row['title'];
            $tekst =$row['text'];
            $slika=$row['img'];
            $id=$row['id'];
        echo "<tr>";
        echo "<td>$naslov </td>";
        echo "<td>$tekst</td>";
        echo "<td><img src='../$slika' style='width:100%'> </td>";
        echo "<td><a href='cat1_admin.php?edit={$id}'>Izmijeni</a> </td>";
       
        echo "</tr>";
        
        }  
         ?>
        <?php 
      if(isset($_GET['edit'])){
    $cat_id=$_GET['edit'];
          ?>
         <form method="post" action="cat1_admin.php" enctype="multipart/form-data">
                 <div class="form-group">

       <?php 
        
          $query="SELECT * FROM cat1 WHERE id=$cat_id";
          $categoryid=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($categoryid)){
            $title =$row['title'];
            $text =$row['text'];
            $img =$row['img'];
            $id =$row['id'];
            
            ?>
          <input type="text" class="form-control"  placeholder="naslov" name="naslov" value="<?php if(isset($title)){echo $title;} ?>">
     <input type="text" class="form-control"  placeholder="tekst" name="tekst" value="<?php if(isset($text)){echo $text;} ?>">
     <input type="file" class="form-control"  placeholder="slika" name="slika" >  
       <?php }
              if(isset($_POST['update'])){
            $titleu=$_POST['naslov'];
            $textu=$_POST['tekst'];
            $imgu=$_FILES['slika']['name'];
            $imgu_tmp=$_FILES['slika']['tmp_name'];
            move_uploaded_file($imgu_tmp,"../fotke/$imgu");

            $query_update="UPDATE cat1 SET title ='{$titleu}',text ='{$textu}',img ='$imgu' WHERE id='{$cat_id}'";
            $update=mysqli_query($connection,$query_update);
              if(!$update){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
            
         }
              
              ?>
           
     
    </div>
    <button class="btn btn-success" type="submit" name="update" class="btn btn-success" >UPDATE</button>
             <?php     
          }
            
        
        ?>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        
        
        </form>
          </tbody>
    
    
    
    </table>
    
      </div>
   
    
       
  </div>
  
<?php include("footer_admin.php") ?>