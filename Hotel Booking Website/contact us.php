<?php
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $phno=$_REQUEST['phno'];
    $email="rajshridjadhav2244@gmail.com";
    $message=$_REQUEST['message'];
    $to=$email;
    // echo $name;
    // echo $phno;
    // echo $email;
   
    $subject="SkyLight Hotel Booking Services";
    $header="From:rajshridjadhav2244@gmail.com";
    $header .= "Cc:rajshridjadhav2244@gamil.com";
    $retvalue=mail($to,$subject,$message,$header);
    If($retvalue == true)
    {
        echo "<script>alert('Message send succeefully!!!!!');</script>";
        echo "<script>window.location.href='contact us.html';</script>";
    }
    Else
    {
        echo "<script>alert('Message Failed to send!!!!!');</script>";
        echo "<script>window.location.href='contact us.html';</script>";
    }
}
    
?>