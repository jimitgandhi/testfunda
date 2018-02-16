<?php
    include "db-connect.php";
    global $connection;
        $name = $_POST['name'];
        $contact = $_POST["contact"];
        $email=$_POST["email"];
        $dob=$_POST["dob"];
        $query = mysqli_query($connection,"SELECT * FROM information WHERE Contact='$contact'");
        $count1 = mysqli_num_rows($query);
        $query2 = mysqli_query($connection,"SELECT * FROM information WHERE Email='$email'");
        $count2 = mysqli_num_rows($query2);
        if($count1==0 && $count2==0) {
            echo "Data saved successfully!";
            $addData = "INSERT INTO information(Name,Contact,Email,DOB) VALUES ('$name', '$contact','$email','$dob')";
            $result=mysqli_query($connection,$addData);
            if (!$result) {
                die("Query failed");
            }
        } else if($count1!=0) {
           echo "Could not save data! Entered contact number already exists!";
        } else {
            echo "Could not save data! Entered e-mail address already exists!";
        }
?>
