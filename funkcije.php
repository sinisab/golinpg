<?php 
function PopunjavanjeBazeIzFormeZaSastanke(){
if(isset($_POST["submit"])){
            global $connection;
           
            $imeiprezime = $_POST["imeiprezime"];
            $firma = $_POST['firma'];
            $email = $_POST['email'];
            $brtel = $_POST['brtel'];
            $date = date($_POST['date']);
            $time = $_POST['time']; 
            if (!empty($imeiprezime) and !empty($firma) and !empty($brtel) and !empty($date) and !empty($email) and !empty($time))
                {
             
            $query= "INSERT INTO sastanci(imeIprezime,firma,email,brojTelefona,datum,vrijeme) VALUES ('$imeiprezime','$firma','$email','$brtel','$date','$time')";        
            $result = mysqli_query($connection,$query);                          
                    if(!$result){                                                      die('upit pogresan'. mysqli_error($connection));                 
                        }
            }
            
            }
        

}

?>