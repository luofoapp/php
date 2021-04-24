<?php
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "test");

    $pFirstName=$_POST['firstName'];
    $pLastName=$_POST['lastName'];
    $pUsername=$_POST['userName'];
    $pPass=$_POST['pass'];
    $pEmail=$_POST['email'];
    $pPhoneNumber=$_POST['phoneNumber'];


    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $qry="INSERT INTO user_info (username, firstName, lastName, pass, email, phoneNumber) VALUES ('$pUsername', '$pFirstName', '$pLastName', '$pPass', '$pEmail', '$pPhoneNumber')";

    if (mysqli_query($conn, $qry))
    {
    	echo "Inserted successfully!";
    }

    else     
    {    
        echo "some error occured";    
    }    
?>