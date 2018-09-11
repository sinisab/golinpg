 <form class="form-inline" action="" method="post">
    
    <div class="form-group">
     <label for="user">Username</label>
     <input type="text" class="form-control"  name="user">
     <label for="pass">Password</label>

     <input type="password" class="form-control"  name="pass" >
     <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
  
     </select> 
             
        
    <?php 
        
            
        
         if(isset($_POST['add'])){
             
            $user= $_POST['user'];
            $pass= $_POST['pass'];
            $role=$_POST['role'];
             if(!empty($user)&&!empty($pass)){
            $query="SELECT randSalt FROM users";
            $select_randsalt_query=mysqli_query($connection, $query);
                if(!$select_randsalt_query){
                        die ('UPIT POGRESAN'.mysqli_error($connection));
                }
            $row=mysqli_fetch_assoc($select_randsalt_query);
            $salt=$row['randSalt'];
            $pass=crypt($pass, $salt);
            $query ="INSERT INTO users(user_name,user_pass,user_role)";
            $query .="VALUES('{$user}','{$pass}','{$role}')";
            $update_query=mysqli_query($connection,$query);
            if(!$update_query){
                        die ('UPIT POGRESAN'.mysqli_error($connection));
              }
             }
             else
             {
                 echo "polja moraju biti popunjena!";
             }
            
         }
         

        ?>
     
    </div>
    <button class="btn btn-success" type="submit" name="add" class="btn btn-success" >DODAJ KORISNIKA</button>
      
          
  </form>