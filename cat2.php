    <?php
    $query="SELECT * FROM cat2";
    $select_content=mysqli_query($connection, $query);
    if(!$select_content){
        
        die("Zahtjev pogresan".mysqli_error($connection));
    }
    
    while($row=mysqli_fetch_array($select_content)){
         $title=$row['title'];
         $text=$row['text'];
         $img=$row['img'];
         
   
    ?>

<div class="col-md-4" >
    <img src="<?php echo $img; ?>" class="img-responsive">
    <h1><b><?php echo $title; ?></b></h1>
    <p><?php echo $text; ?></p>
    
    
    </div>
<?php } ?>