<?php
    $conn=mysqli_connect("localhost","root","","test");
    mysqli_select_db($conn, "test");


    $pEmail=$_POST['emailInput'];
    $pPass=$_POST['passwordInput'];




    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $qry = "SELECT * FROM user_info WHERE email='$pEmail'";
    $qry2 = "SELECT * FROM user_info WHERE email='$pEmail'AND pass='$pPass'";

    if (mysqli_query($conn, $qry2)) {

        
        $result = mysqli_query($conn, $qry2);
 
        $rowCount = mysqli_num_rows($result);
        echo $rowCount;
        mysqli_free_result($result);
    }
    else {
        echo "unsuccessful ";
    }
  mysqli_close($conn);
?>