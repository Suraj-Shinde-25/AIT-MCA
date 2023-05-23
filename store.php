<?php
    $rollno = $_REQUEST['rollno'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];

    $hostname = 'localhost'; 
    $username = 'root'; 
    $userpass = ''; 
    $dbname = 'suraj'; 

    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    $sql = "insert into student(rollno,name,email) VALUES ('$rollno','$name','$email')";
    mysqli_query($conn,$sql);
    echo "Record is added in db successfully";

?>