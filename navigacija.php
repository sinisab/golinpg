<header>
<nav id="meni" class="navbar-fixed-top navbar">
 <div id="header" class="container-fluid">
     <div class="col-sm-5 col-md-offset-8 " >
         
         <div class="col-md-1"><img class="img-responsive "src="Ikonice-drustvene-mreze/fb.svg" style="height:15px" ></div>
          <div class="col-md-1"><img class="img-responsive" src="Ikonice-drustvene-mreze/instagram.svg" style="height:15px"  ></div>
         <div class="col-md-1"><img class="img-responsive" src="Ikonice-drustvene-mreze/linkedin.svg" style="height:15px"  ></div>
          <div class="col-md-1"><img class="img-responsive" src="Ikonice-drustvene-mreze/twiter.svg" style="height:15px" ></div>
   
     </div>
     
</div>
  <div class="container-fluid">
      <div class="col-md-1 col-md-offset-2">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img src="Logo%20GolinPG.svg"></a>
    </div>
      </div>
      <div id="proba" class="col-md-7">
    <ul class="nav navbar-nav navbar-right">
        
    <?php 
        
        $query="SELECT * FROM nav_top";
        $select_all_titles=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_all_titles)){
            $nav_title=$row['title'];
            $url=$row['url'];
            echo"<li><a href='{$url}'>{$nav_title}</a></li>";
        }
    ?>
        <li><a href="forma.php">ADMIN</a></li>
    </ul>
    </div>
  </div>
</nav>
</header>