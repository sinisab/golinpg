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
<div class="col-md-12"> 
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
        
       
        
        //////ISPISIVANJE BAZE U TABELU
        $query="SELECT * FROM sastanci";
        $sastanci=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($sastanci)){
            $sastanci_id =$row['id'];
            $sastanci_ime_prezime=$row['imeIprezime'];
            $sastanci_firma=$row['firma'];
            $sastanci_email=$row['email'];
            $sastanci_broj_telefona=$row['brojTelefona'];
            $sastanci_datum=$row['datum'];
            $sastanci_vrijeme=$row['vrijeme'];
        
        
        echo "<tr>";
        echo "<td>$sastanci_id </td>";
        echo "<td>$sastanci_ime_prezime </td>";
        echo "<td>$sastanci_firma </td>";
        echo "<td>$sastanci_email </td>";
        echo "<td>$sastanci_broj_telefona </td>";
        echo "<td>$sastanci_datum </td>";
        echo "<td>$sastanci_vrijeme </td>";
        echo"<td><a href='sastanci.php?zakazan={$sastanci_id}'>Zakazi</a></td>";
         echo "</tr>";
            
        } 
        
       
                 
        
        ?>
         
          </tbody>
    
    
    
    </table>
          </div>

    <?php 
    if(isset($_GET['zakazan'])){
        $z_id=$_GET['zakazan'];
        $query="SELECT * FROM sastanci WHERE id='{$z_id}'";
        $sastanci=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($sastanci)){
            $sastanci_id =$row['id'];
            $sastanci_ime_prezime=$row['imeIprezime'];
            $sastanci_firma=$row['firma'];
            $sastanci_email=$row['email'];
            $sastanci_broj_telefona=$row['brojTelefona'];
            $sastanci_datum=$row['datum'];
            $sastanci_vrijeme=$row['vrijeme'];
            $query_zakazi="INSERT INTO zakazanisastanci(imeIprezime,firma,email,brojTelefona,datum,vrijeme) VALUES ('$sastanci_ime_prezime','$sastanci_firma','$sastanci_email','$sastanci_broj_telefona','$sastanci_datum','$sastanci_vrijeme')";        
            $result_zakazi = mysqli_query($connection,$query_zakazi);                          
                    if(!$result_zakazi){ 
                        die('upit pogresan'. mysqli_error($connection));                 
                        }
          $izbrisi="DELETE FROM sastanci WHERE id='{$z_id}'";
          $result_izbrisi = mysqli_query($connection,$izbrisi);                          
                    if(!$result_izbrisi){ 
                        die('upit pogresan'. mysqli_error($connection));                 
                        }
            
        
    }
                header("Location: sastanci.php");

    }
    
    ?>
    <div class="col-md-12"> 
    <h4>ZKAZANI SASTANCI</h4>
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
        
       
        
        //////ISPISIVANJE BAZE U TABELU
        $query="SELECT * FROM zakazanisastanci";
        $sastanci=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($sastanci)){
            $sastanci_id =$row['id'];
            $sastanci_ime_prezime=$row['imeIprezime'];
            $sastanci_firma=$row['firma'];
            $sastanci_email=$row['email'];
            $sastanci_broj_telefona=$row['brojTelefona'];
            $sastanci_datum=$row['datum'];
            $sastanci_vrijeme=$row['vrijeme'];
        
        
        echo "<tr>";
        echo "<td>$sastanci_id </td>";
        echo "<td>$sastanci_ime_prezime </td>";
        echo "<td>$sastanci_firma </td>";
        echo "<td>$sastanci_email </td>";
        echo "<td>$sastanci_broj_telefona </td>";
        echo "<td>$sastanci_datum </td>";
        echo "<td>$sastanci_vrijeme </td>";
        echo"<td><a href='sastanci.php?delete={$sastanci_id}'>izbrisi</a></td>";
         echo "</tr>";
        
        } 
        if(isset($_GET['delete'])){
            $izbrisi_id=$_GET['delete'];
            $izbrisi_sastanak="DELETE FROM zakazanisastanci WHERE id='{$izbrisi_id}'";
            $result_delete = mysqli_query($connection,$izbrisi_sastanak);                          
                    if(!$result_delete){ 
                        die('upit pogresan'. mysqli_error($connection));                 
                        }
            header("Location: sastanci.php");
        }
       
                 
        
        ?>
         
          </tbody>
    
    
    
    </table>
          </div>
    
       
  </div>
  
<?php include("footer_admin.php") ?>