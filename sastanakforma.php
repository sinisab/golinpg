<?php include("funkcije.php")?>
<?php PopunjavanjeBazeIzFormeZaSastanke(); ?>
 <form method = "post" action = "index.php">
  <a><img id="LogoPrijava" src="Logo%20GolinPG.svg"></a>
   <p>Zakažite sastanak sa nekim od naših poslodavaca</p>
   <span id = "close_login" class="glyphicon glyphicon-remove"></span>    
    
   <div class="form-group">
   <input type = "text" class="form-control" id = "imeiprezime" placeholder = "Ime i prezime" name = "imeiprezime">
    </div>
    <div class="form-group">
    <input type = "text" class="form-control" id = "firma" name = "firma" placeholder = "Firma"></div>
   <div class="form-group">   
   <input type = "email" class="form-control" id = "email" placeholder = "e-Mail" name = "email">
      </div>
   <div class="form-group">
   <input type = "text" class="form-control" id = "brtel" name = "brtel" placeholder = "Broj telefona">
      </div>
   <div class="form-group">
   <input type = "date" id = "date" name = "date" placeholder = "mm/dd/yy">
   <input type = "time"  id = "time"  name = "time" placeholder = "10:00h">
       </div>
     <?php /*
      if(isset($_POST['submit'])){
          
           $to = sinisablagojevic1992@gmail.com;
            $subject = wordwrap[$_POST['firma'],70];
            $body = "Imate novi zakazan sastanak";
            $header = $_POST['email'];
            mail($to,$subject,$body,$header);
      }
   */ ?>
   <input type = "submit" name="submit" class="btn btn-default center-block" id = "dologin" value = "ZAKAŽI SASTANAK">

  </form>