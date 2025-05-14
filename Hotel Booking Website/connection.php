<?php
    $conn=mysqli_connect("localhost","root","","HBW","3307");
    if($conn==false)
    {
        echo "<script>alert('Connection Failed');</script>";
    }
    // else{
    //     echo "<script>alert('Connection Success');</script>";
    // }

?>