<form class="form-inline" action="" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
      <?php
        if(isset($_GET['edit'])){
            $cat_id=$_GET['edit'];
             $query="SELECT * FROM cat1 WHERE id=$cat_id";
        $categoryid=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($categoryid)){
            $title =$row['title'];
            $cat_id =$row['id'];
            $text=$row['text'];
            $image=$row['img'];
            
            ?>
     <input type="text" class="form-control" id="update" placeholder="ime kategorije" name="new_title" value="<?php if(isset($title)){echo $title;} ?>">
     <input type="text" class="form-control" id="update" placeholder="ime kategorije" name="new_text" value="<?php if(isset($text)){echo $text;} ?>">
     <input type="file" class="form-control" id="url" placeholder="url adresa kategorije" name="new_image">
     </div>
    <button class="btn btn-success" type="submit" name="update" class="btn btn-success" >UPDATE</button>
             
    <?php    }} ?>
        
    <?php 
         if(isset($_POST['update'])){
            $update_cat_title=$_POST['new_title'];
            $update_cat_text=$_POST['new_text'];
            $imgu=$_FILES['new_image']['name'];
            $imgu_tmp=$_FILES['new_image']['tmp_name'];
            move_uploaded_file($imgu_tmp,"../fotke/$imgu");
             
            $query="UPDATE cat1 SET title ='{$update_cat_title}', text ='{$update_cat_text}', img='Fotke/{$imgu}' WHERE id='{$cat_id}'";
            $update_query=mysqli_query($connection,$query);
              if(!$update_query){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
            
         }
        
        ?>
     
   
         
          
  </form>