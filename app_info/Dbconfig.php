<?php    
    $POST_first_name = isset($_POST["firstName"]);  
    $POST_last_name = isset($_POST["lastName"]);  
    $POST_user_name = isset($_POST["username"]);    
    $POST_email= isset($_POST["email"]);  
    $POST_password= isset($_POST["pass"]);  
    $POST_phone_number= isset($_POST["phoneNumber"]);    

    $user = "root";    
    $password = "";    
    $host ="localhost";    
    $db_name ="test";   
 
    $con=mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  

    $sql = "INSERT INTO user_info VALUES('".$POST_first_name."','".$POST_last_name."','".$POST_user_name."','".$POST_email."','".$POST_password."','".$POST_phone_number."')";    

  

    if(mysqli_query($con,$sql))    
    {    
        echo "Data inserted successfully....";    
    }    
    else     
    {    
        echo "some error occured";    
    }    
    mysqli_close($con);    
?>     