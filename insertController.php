
<?php  


require_once('db.php');


    if (isset($_POST['signup']))
    
    {
 
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $add=$_POST['add'];
            $mob=$_POST['mob'];
            $gen=$_POST['gen'];
            $part=$_FILES['file']['name'];
            $hobbies=implode(",",$_POST['hobb']);
            $country=$_POST['country'];
            $dob=$_POST['dob'];


      $a="INSERT INTO `users` (`name`, `email`, `password`,`address`,`mobile`,`gender`,`image`,`hobbies`,`country`,`dob`) VALUES ('$name', '$email', '$pass','$add','$mob','$gen','$part','$hobbies','$country','$dob')";

      if(mysqli_query($con,$a))
      {
       

         header("location:view.php");
         
      }
         else 
      {
        echo "Data can not insert" .mysqli_error($con);
      }

    }

 ?>