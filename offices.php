
<div class="container-fluid">
<div class="row" >
    <h1 style="text-align:center;color:white"><b>OFFICES</b></h1>
    </div>
    <div class="container-fluid col-md-8 col-md-offset-2 ">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner"style="color:orange">

      <div class="item active">
          
      <div class="row col-md-12 " style="margin-top: 20px;">
          <?php 
        
        $query="SELECT * FROM offices";
        $select_all_titles=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_all_titles)){
            $slika=$row['image'];
            $ime=$row['name'];
            
           
    ?>
          
          
       <div class="col-md-3 stylw " >
        <img class="img-responsive" src="<?php echo "$slika" ?>" alt="" >
             <div class="caption" style="bottom:20px">
            <p><b><?php echo "$ime" ?></b></p>
        </div>

        </div>
          <?php }?>
          

        </div>
       
        </div>
        
      </div>
      
  
    </div>

    
  </div>
</div>



