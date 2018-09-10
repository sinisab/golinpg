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
  
  
      <?php if(isset($_POST['submit'])){
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
          
              $query ="INSERT INTO content2(header_title,header,box1_title,box2_title,box3_title,bpx4_title,box1_content,box2_content,box3_content,box4_content)";
              $query .="VALUE('{$h_title}','{$h_content}','{$b1_title}','{$b2_title}','{$b3_title}','{$b4_title}','{$b1_content}','{$b2_content}','{$b3_content}','{$b4_content}')";
              $create_cat=mysqli_query($connection,$query);
              if(!$create_cat){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
              
          }
        ?>
    
   <?php 
      if(isset($_GET['edit'])){
    $box_edit_id=$_GET['edit'];
    include ("update_box.php");
    
}
    
    ?>

</div>
    
      </div>
<div class="col-md-12"> 
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>header</th>
        <th>header content</th>
        <th>box1 title</th>
        <th>box1 content</th>
        <th>box2 title</th>
        <th>box2 content</th>
        <th>box3 title</th>
        <th>box3 content</th>
        <th>box4 title</th>
        <th>box4 content</th>
         
      </tr>    
    </thead>
    <tbody>
       <?php
    $query="SELECT * FROM content2";
    $select_content=mysqli_query($connection, $query);
    if(!$select_content){
        
        die("Zahtjev pogresan".mysqli_error($connection));
    }
    
    while($row=mysqli_fetch_array($select_content)){
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
        echo "<tr>";
        echo "<td>$id </td>";
        echo "<td>$h_title </td>";
        echo "<td>$h_content </td>";
        echo "<td>$b1_title </td>";
        echo "<td>$b1_content </td>";
        echo "<td>$b2_title </td>";
        echo "<td>$b2_content </td>";
        echo "<td>$b3_title </td>";
        echo "<td>$b3_content </td>";
        echo "<td>$b4_title </td>";
        echo "<td>$b4_content </td>";
        echo "<td><a href='edit_box.php?edit={$id}'>Izmijeni</a> </td>";
        echo "</tr>";
    
    ?>
         
          </tbody>
    
    <?php  }?>
    
    </table>
    
      </div>
   
    
       
  </div>
  
<?php include("footer_admin.php") ?>