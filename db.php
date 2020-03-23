<?php
    require_once('conn.php');
    // get the  form inputs
    $username = $_POST['username'];
    $job_no= $_POST['job_no'];
    $dept = $_POST['dept'];
    $gender= $_POST['gender'];
    $age = $_POST['age'];
    $pass = md5($_POST['pass']);

    // insert it into db
    $query = "INSERT INTO `employees` (`Username`,`Job Number`,`Department`,`Gender`,`Age`,`Password`) 
        VALUES('$username','$job_no','$dept','$gender','$age','$pass');";

    // check if the entry was successful
    if(mysqli_query($conn,$query)){
        echo "Registration successful!";
    }else{
        echo "Something went wrong!";
    }
    
?>