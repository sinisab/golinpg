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
        Korisnici
        <small>Users</small>
      </h1>
      
    </section>
<div class="col-md-12"> 
      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
          <th>Username</th>
          <th>Password</th>
          <th>Role</th>
          <th>Change role to admin</th>
          <th>Change role to user</th>
          <th>Delete user</th>
      </tr>    
    </thead>
    <tbody>
        <?php 
        
       
        
        //////ISPISIVANJE BAZE U TABELU
        $query="SELECT * FROM users";
        $sastanci=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($sastanci)){
            $user_id =$row['id'];
            $username=$row['user_name'];
            $pass=$row['user_pass'];
            $role=$row['user_role'];
            
        
        
        echo "<tr>";
        echo "<td>$user_id </td>";
        echo "<td>$username </td>";
        echo "<td>$pass </td>";
        echo "<td>$role </td>";
        echo"<td><a href='users.php?admin={$user_id}'>Admin</a></td>";
        echo"<td><a href='users.php?user={$user_id}'>User</a></td>";
        echo"<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
         echo "</tr>";
            
        } 
    
    
        
        if(isset($_GET['delete'])){
            $izbrisi_id=$_GET['delete'];
            $izbrisi_korisnika="DELETE FROM users WHERE id='{$izbrisi_id}'";
            $result_delete = mysqli_query($connection,$izbrisi_korisnika);                          
                    if(!$result_delete){ 
                        die('upit pogresan'. mysqli_error($connection));                 
                        }
            header("Location: users.php");
        }
       if(isset($_GET['admin'])){
        $z_id=$_GET['admin'];
        $query="UPDATE users SET user_role='admin' WHERE id='{$z_id}'";
        $sastanci=mysqli_query($connection,$query);
                header("Location: users.php");
       }
        if(isset($_GET['user'])){
        $z_id=$_GET['user'];
        $query="UPDATE users SET user_role='user' WHERE id='{$z_id}'";
        $sastanci=mysqli_query($connection,$query);
                header("Location: users.php");

    }
                 
        
              
        
        ?>
         
          </tbody>
    
    
    
    </table>
    
    <?php include ("add_user.php"); ?>
          </div>

    <?php 

    
    ?>
    
    
       
  </div>
  
<?php include("footer_admin.php") ?>