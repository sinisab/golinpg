<?php include ("header.php") ?>

<script src="skripta.js"></script>
<?php include ("navigacija.php") ?>
<div class="container-fluid col-md-3 col-md-offset-4 centered" id = "loginform">
  <?php include ("sastanakforma.php")?>
     
 </div>
<div id="sastanak" class="container-fluid">
<div class="row">
<img src="Fotke/fotka1.png" class="img-responsive center-block">
    <div class="img-overlay"><div class="col-md-2"></div>
    <div class="col-md-3">
    <h1><b>AMPLITUDO<br> AFFILIATE OF GOLIN</b></h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    
    <button class="btn btn-md" id="zakazi">ZAKAŽI SASTANAK</button>
        </div>
    </div>
    </div>
     </div>

  
<div class="container-fluid " id="content">
    
   <?php include("cat1.php"); ?>
   <?php include("cat2.php"); ?>
    
    </div>

<div class="container-fluid" id="clients" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('Fotke/fotka4.png');bakground-color:black">
   <div class="row" style="background-color:black;">
    <h1><b>CLIENTS</b></h1>
    </div>
    
    <div class="container-fluid">
    
    <?php include ("karusel.php") ?>
         
</div>

</div>
<div class="container fluid" style="background-color:black">
  
</div>
<div class="container-fluid" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('Fotke/fotka5.png');background-color:black;margin-top:50px">
    <div class="row col-md-offset-5 col-md-2 " style="background-color:black">
       <span><img src="go-all-in.gif" class="img-responsive center-block" ></span>
        
    </div>
    
    <?php
    $query="SELECT * FROM content2";
    $select_content=mysqli_query($connection, $query);
    if(!$select_content){
        
        die("Zahtjev pogresan".mysqli_error($connection));
    }
    
    while($row=mysqli_fetch_array($select_content)){
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
         $b1_img=$row['box1_img'];
         $b2_img=$row['box2_img'];
         $b3_img=$row['box3_img'];
         $b4_img=$row['box4_img'];
     
    
    ?>
    
    <div class="row col-md-4 col-md-offset-4" style="color:white;">
        <h3 style="text-align: center"><b><?php echo $h_title?></b><br></h3>
        <p style="text-align: center; ">
            <?php echo $h_content; ?>
        </p>
        
    </div>
    <div class="row col-md-8 col-md-offset-3" style="color:white;margin-bottom:30px">
        <div class="col-md-2" style="background-color:black; margin-right:10px;padding:10px;text-align:center;opacity:0.5;">
           <h4><b><?php echo $b1_title; ?></b></h4>
                    <img src="<?php echo $b1_img?>" > 
            <p><?php echo $b1_content; ?></p>
        </div>
        <div class="col-md-2" style="background-color:black; margin-right:10px;padding:10px;text-align:center;opacity:0.5;">
        <h4><b><?php echo $b2_title; ?></b></h4>
            <img src="<?php echo $b2_img?>" > 
         <p><?php echo $b2_content; ?></p></div>
        <div class="col-md-2" style="background-color:black; margin-right:10px;padding:10px;text-align:center;opacity:0.5;">
            <h4><b><?php echo $b3_title; ?></b></h4>
            <img src="<?php echo $b3_img?>" > 
             <p><?php echo $b3_content; ?></p>
        </div>
        <div class="col-md-2" style="background-color:black; margin-right:10px;padding:10px;text-align:center;opacity:0.5;">
        <h4><b><?php echo $b4_title; ?></b></h4>
            <img src="<?php echo $b4_img?>" > 
         <p><?php echo $b4_content; ?></p></div>
        
        </div>
    <?php } ?>
    </div>
    <?php include("offices.php");?>
    
    <div class="container-fluid" style="background-color:orange;margin-bottom:40px;">
        <div class="row col-md-2 col-md-offset-6">
            <h1 style="text-align:center;"><b>CONTACT</b></h1><br>
            <p style="text-align:center;">
                Bulevar Petra Cetinjskog 56 81000 Podgorica, Montenegro <br>
                +382 223 240<br>
                info@amplitudo.me
                
            </p>
        </div>
        
        
    </div>

            
        
<?php include("footer.php") ?>

