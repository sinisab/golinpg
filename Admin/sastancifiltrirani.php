<?php include("header_admin.php") ?>
<div class="wrapper">

 <?php include("nav_top.php");?>
</div>

  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sastanci
        <small>Control panel</small>
      </h1>
      
    </section>
      <div class="container">
  
  <form class="form-inline" action="sastancifiltrirani.php" method="post">
      <div class="row col-md-8 col-md-offset-2">
        
    <div class="form-group">
        <label for="pdat">Pocetni datum:</label>
      <input type="date" class="form-control" id="pdat" placeholder="pocetni datum"  name="pdat">
    </div>
          
    <div class="form-group">
        <label for="krdat">Krajnji datum:</label>
      <input type="date" class="form-control" id="kdatum" placeholder="krajnji datum"  name="krdat">
    </div>
           <button type="submit" name="submit" class="btn btn-primary">Pretrazi</button>
      </div>

          </form>
      </div>
          
          
<div class="col-md-12"> 
    <script type="text/javascript">
function odstampaj()
  {
  window.print()
  }
</script>
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
          <th>Ime i Prezime</th>
          <th>Firma</th>
          <th>e-mail</th>
          <th>Broj Telefona</th>
          <th>Datum</th>
          <th>Vrijeme</th>
      </tr>    
    </thead>
    <tbody>
        <?php 
        if(isset($_POST['submit'])){
        $pocetni=date($_POST['pdat']);
        $krajnji=date($_POST['krdat']);
       
        
        //////ISPISIVANJE BAZE U TABELU
        $query="SELECT * FROM sastanci WHERE datum <='$krajnji' AND datum>='$pocetni'";
        $sastanci=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($sastanci)){
            $sastanci_id =$row['id'];
            $sastanci_ime_prezime=$row['imeIprezime'];
            $sastanci_firma=$row['firma'];
            $sastanci_email=$row['email'];
            $sastanci_broj_telefona=$row['brojTelefona'];
            $sastanci_datum=$row[('datum')];
            $sastanci_vrijeme=$row['vrijeme'];
        
        
        echo "<tr>";
        echo "<td>$sastanci_id </td>";
        echo "<td>$sastanci_ime_prezime </td>";
        echo "<td>$sastanci_firma </td>";
        echo "<td>$sastanci_email </td>";
        echo "<td>$sastanci_broj_telefona </td>";
        echo "<td>$sastanci_datum </td>";
        echo "<td>$sastanci_vrijeme </td>";
        echo"<td><a href='sastanci.php?zakazan_id={$sastanci_id}'>Zakazi</a></td>";
         echo "</tr>";
        
        }
            
        }
       
                 
        
        ?>
         
          </tbody>
    
    
    
    </table>
    <input type="button" class="btn btn-success center-block" value="Odstampaj" onclick="odstampaj()" />
      </div>
    
       
  </div>
  
<?php include("footer_admin.php") ?>