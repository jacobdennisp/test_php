<?php
    $connection = mysqli_connect("127.0.0.1","root","","php_test_database");

    //print_r($connection);

    if($connection === false){
        die("Something Went Wrong with your connection : For more information check Error Stack<br>".mysqli_connect_error());
    }

    echo "Connection Created Successfully<br>";
    echo "Connection Host info is as follows <br>".mysqli_get_host_info($connection);

    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $created_at=1;
    
    $query = "INSERT INTO users(name,email,password,created_by)VALUE('$name','$email','$password','$created_at')";

    if(mysqli_query($connection,$query)){
        echo "<br>Data has been inserted successfully!";
    }else{
        echo "<br>Data could not be inserted";
        echo "<br>Check Error Trace<br>".mysqli_error($connection);
    }

    mysqli_close($connection);
    header("location: form.php");
?>