<?php
    $db="CREATE DATABASE IF NOT EXISTS form1";
    
    $connection=mysqli_connect("localhost","root","");
    if(!$connection) {
        die("Database connection failed!");
    }
    mysqli_query($connection,$db);
    $table="CREATE TABLE IF NOT EXISTS information(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        Name VARCHAR(33) NOT NULL,
        Contact BIGINT(10) NOT NULL UNIQUE,
        Email VARCHAR(50) NOT NULL,
        DOB VARCHAR(10) NOT NULL
    )";

    $connection = new mysqli("localhost","root","","form1");
    mysqli_query($connection,$table);

