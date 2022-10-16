<?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => sample1
    if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "sample1");
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    
    $email = $_REQUEST['email'];
    $password= $_REQUEST['password'];
    
    $sql = "SELECT * FROM profile1 WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        header('location:profile.php');
        exit();
    }
    mysqli_close($conn);
    }
?>