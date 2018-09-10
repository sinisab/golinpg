<div class="container-fluid col-md-6 col-md-offset-3">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
         
          
          
          
          
          
          
      <div class="row col-md-12 center-block" style="margin-top: 20px;">
           
         <?php 
        
        $query="SELECT * FROM clients";
        $select_all_clients=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_all_clients)){
            $slika=$row['img'];
            $id=$row['id'];
            
           
    ?>
          
       <div class="col-md-4 " style="margin-bottom:20px">
        <img src="<?php echo $slika?>" alt="" style="width: 100%">
        </div>
                <?php }?>
        </div>
       

      </div>
      
  
    </div>

    <!-- kontrole -->
    
    <a class="carousel-control" href="#myCarousel" data-slide="next">
      <span><img src="strelica.svg" style="position:relative;height: 40px; margin-left: 300px; margin-top: 200px"></span>
    </a>
  </div>
</div>