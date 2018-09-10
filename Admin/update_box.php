 <form class="form-inline" action="" method="post">
   
    <div class="form-group">

<?php
        if(isset($_GET['edit'])){
            $box_edit_id=$_GET['edit'];
             $query="SELECT * FROM content2 WHERE id=$box_edit_id";
        $boxid=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($boxid)){
            $id=$row['id'];
            $h_title=$row['header_title'];
            $h_content=$row['header'];
            $b1_title=$row['box1_title'];
            $b2_title=$row['box2_title'];
            $b3_title=$row['box3_title'];
            $b4_title=$row['box4_title'];
            $b1_content=$row['box1_content'];
            $b2_content=$row['box2_content'];
            $b3_content=$row['box3_content'];
            $b4_content=$row['box4_content'];
            
            ?>
       
         <input type="text" class="form-control" placeholder="header title" name="header_title">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="header content" name="header">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box1 title" name="box1_title">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box1 content" name="box1_content">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box2 title" name="box2_title">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box2 content" name="box2_content">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box3 title" name="box3_title">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box3 content" name="box3_content">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box4 title" name="box4_title">
    </div>
         <div class="form-group">
      
      <input type="text" class="form-control" id="addcat" placeholder="box4 content" name="box4_content">
    </div>
             
    <?php    }} ?>
        
    <?php 
         if(isset($_POST['update'])){
            $id=$_POST['id'];
            $h_id=$_POST['header_title'];
            $h_text=$_POST['header'];
            $b1_title=$_POST['box1_title'];
            $b2_title=$_POST['box2_title'];
            $b3_title=$_POST['box3_title'];
            $b4_title=$_POST['box4_title'];
            $b1_content=$_POST['box1_content'];
            $b2_content=$_POST['box2_content'];
            $b3_content=$_POST['box3_content'];
            $b4_content=$_POST['box4_content'];
            $query="UPDATE content2 SET 
            header_title ='{$h_id}',
            header ='{$h_text}',
            box1_title ='{$b1_title}',
            box2_title ='{$b2_title}',
            box3_title ='{$b3_title}',
            box4_title ='{$b4_title}',
            box1_content ='{$b1_content}',
            box2_content ='{$b2_content}',
            box3_content ='{$b3_content}',
            box4_content ='{$b4_content}'
            WHERE id='{$box_edit_id}'";
            $update_query=mysqli_query($connection,$query);
              if(!$update_query){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
                        header("Location: edit_box.php");

         }?>
     <button class="btn btn-success" type="submit" name="update" class="btn btn-success" >UPDATE</button>
</form>