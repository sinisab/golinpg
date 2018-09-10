 <form class="form-inline" action="" method="post">
   
    <div class="form-group">
      <?php
        if(isset($_GET['edit'])){
            $cat_edit_id=$_GET['edit'];
             $query="SELECT * FROM nav_top WHERE id=$cat_edit_id";
        $categoryid=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($categoryid)){
            $categories =$row['title'];
            $cat_id =$row['id'];
            $url=$row['url'];
            
            ?>
     <input type="text" class="form-control" id="update" placeholder="ime kategorije" name="update_cat" value="<?php if(isset($categories)){echo $categories;} ?>">
     <input type="text" class="form-control" id="url" placeholder="url adresa kategorije" name="url" value="<?php if(isset($url)){echo $url;} ?>">
             
    <?php    }} ?>
        
    <?php 
         if(isset($_POST['update'])){
            $update_cat_title=$_POST['update_cat'];
            $update_url=$_POST['url'];
            $query="UPDATE nav_top SET title ='{$update_cat_title}', url ='{$update_url}' WHERE id='{$cat_id}'";
            $update_query=mysqli_query($connection,$query);
              if(!$update_query){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
            
         }
        
        ?>
     
    </div>
    <button class="btn btn-success" type="submit" name="update" class="btn btn-success" >UPDATE</button>
         
          
  </form>