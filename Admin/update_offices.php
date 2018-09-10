 <?php
        if(isset($_GET['edit'])){
            $offices_edit_id=$_GET['edit'];
             $query="SELECT * FROM offices WHERE id=$offices_edit_id";
        $officesid=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($officesid)){
            $offices_img =$row['image'];
            $offices_id =$row['id'];
            $offices_name =$row['name'];
            
            ?>
       
        <input type="text" class="form-control" id="update" name="update_offices" value="<?php if(isset($offices_name)){echo $offices_name;} ?>">
             
    <?php    }} ?>
        
    <?php 
         if(isset($_POST['update'])){
            $update_office_name=$_POST['update_offices'];
            $query="UPDATE offices SET name ='{$update_office_name}' WHERE id='{$offices_id}'";
            $update_query=mysqli_query($connection,$query);
              if(!$update_query){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
                        header("Location: offices.php");

         }?>