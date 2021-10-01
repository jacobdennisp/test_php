<?php
    $connection = mysqli_connect("127.0.0.1","root","","php_test_database");

    //print_r($connection);

    if($connection === false){
        die("Something Went Wrong with your connection : For more information check Error Stack<br>".mysqli_connect_error());
    }

    echo "Connection Created Successfully<br>";
    echo "Connection Host info is as follows <br>".mysqli_get_host_info($connection);

    mysqli_close($connection);
?>