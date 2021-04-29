<?php
   $con =new mysqli("localhost","root","","Gowtham");

  
   if(!$con){
       echo "NotConnected";
   }
   else{
       if(isset($_POST['register']))
       {
        $name=mysqli_real_escape_string($con,$_POST['name']);
           $age=mysqli_real_escape_string($con,$_POST['age']);
           $batch=mysqli_real_escape_string($con,$_POST['batch']);
           $sql ="INSERT INTO register(username,age,batch) VALUES('$name','$age','$batch')";
           $result =mysqli_query($con,$sql);
           if(!$result){
               echo "Not Registered";
           }else{
               echo "Registered Successfully";
           }
           mysqli_close($con);
       }
   }
?>