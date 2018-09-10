 <form class="form-inline" action="" method="post">
    
    <div class="form-group">
     
     <input type="text" class="form-control"  name="user">
     <input type="password" class="form-control" name="pass" >
     <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
  
     </select> 
             
        
    <?php 
         if(isset($_POST['add'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $role=$_POST['role'];
           $query ="INSERT INTO users(user_name,user_pass,user_role)";
              $query .="VALUES('{$user}','{$pass}','{$role}')";
            $update_query=mysqli_query($connection,$query);
              if(!$update_query){
                  die ('UPIT POGRESAN'.mysqli_error($connection));
              }
            
         }
        
        ?>
     
    </div>
    <button class="btn btn-success" type="submit" name="add" class="btn btn-success" >DODAJ KORISNIKA</button>
         
          
  </form>