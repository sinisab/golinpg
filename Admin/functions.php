<?php 

function ubaci_kategorije(){
        global $connection;
        if(isset($_POST['submit'])){
          $new_title=$_POST['addcat'];
          $url=$_POST['url'];
          if($new_title == "" || empty($new_title)) {
              echo "polje mora biti popunjeno!";
          }
          else{
              $query ="INSERT INTO nav_top(title,url)";
              $query .="VALUE('{$new_title}','{$url}')";
              $create_cat=mysqli_query($connection,$query);
              if(!$create_cat){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
              
          }
      }
}



function nadji_sve_kategorije(){
    global $connection;
    //////ISPISIVANJE BAZE U TABELU
        $query="SELECT * FROM nav_top";
        $category=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($category)){
            $categories =$row['title'];
            $cat_id =$row['id'];
            $url=$row['url'];
            
        
        
        echo "<tr>";
        echo "<td>$categories </td>";
        echo "<td>$cat_id </td>";
        echo "<td>$url </td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Izbrisi</a> </td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Izmijeni</a> </td>";
        echo "</tr>";
       
        
        }  
    
}

function izbrisi_kategorije(){
    global $connection;
 if(isset($_GET['delete'])){
            $delete_cat_id=$_GET['delete'];
            $query="DELETE FROM nav_top WHERE id={$delete_cat_id}";
            $delete_query=mysqli_query($connection,$query);
            header("Location: categories.php");
            
            
        }
}



?>