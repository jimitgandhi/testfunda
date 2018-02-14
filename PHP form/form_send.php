<?php
    include "db-connect.php";
    global $connection;
    $name = $_POST['name'];
    $contact = $_POST["contact"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $count=0;
    $query = mysqli_query($connection,"SELECT * FROM information WHERE Contact='$contact'");
    $count += mysqli_num_rows($query);
    
    $query2 = mysqli_query($connection,"SELECT * FROM information WHERE Email='$email'");
    $count += mysqli_num_rows($query2);

    if($count==0) {
        $addData = "INSERT INTO information(Name,Contact,Email,DOB) VALUES ('$name', '$contact','$email','$dob')";
        $result=mysqli_query($connection,$addData);
        if (!$result) {
            die("Query failed");
        }
    }
?>
