<?php
    include("connection.php");
    if(isset($_REQUEST['confirm']))
    {
        $id=$_REQUEST['id'];
        $name=$_REQUEST['Name'];
        $email=$_REQUEST['Email'];
        $hotel="SkyLight";
        $phone=$_REQUEST['Phone'];
        $day=$_REQUEST['Day'];
        $room=$_REQUEST['Room'];
        $type=$_REQUEST['rd'];
        $adate=$_REQUEST['ADate'];
        $ddate=$_REQUEST['DDate'];
        if($type=="AC")
        {
            $amount=800*$day;
        }
        else
        {
            $amount=500*$day;
        }
       
        // echo $name;
        // echo $email;
        // echo $hotel;
        // echo $phone;
        // echo $person;
        // echo $room;
        // echo $adate;
        // echo $ddate;
        $q="INSERT INTO `booking`(`uid`,`uname`, `uemail`, `hname`, `uphno`, `uperson`, `uroom`, `typeroom`, `amount`,`adate`, `ddate`) VALUES ('$id','$name','$email','$hotel','$phone','$day','$room','$type','$amount','$adate','$ddate')";
        $run=mysqli_query($conn,$q);
        if($run==true)
        {
            echo "<script>alert('Congratulations!!!! $name your Booking is confirm your amount is $amount');</script>";
           // echo $email;
            $to=$email;
            $subject="SkyLight Hotel Booking Services";
            $message="Hello !!! $name . Welcome to the SkyLight Thanks for choosing us. ";
            $message.="This is Rajshri From SkyLight. ";
            $message.="Your Hotel Booking done successfully.";
            $message.="You have choose $type room .";
            $message.="Your Total Amount for $day day stay is = $amount .";
            $header="From:rajshridjadhav2244@gmail.com";
            $header .= "Cc:rajshridjadhav2244@gamil.com";
            $retvalue=mail($to,$subject,$message,$header);
            // If($retvalue == true)
            // {
            //  Echo "Message sent successfully";
            // }
            // Else
            // {
            //  Echo "Message could not be sent";
            // }
            echo "<script>window.location.href='index.html'</script>";
        }
        else{
            echo "<script>alert('$name your booking is fail');</script>";
            echo "<script>window.location.href='Booking form.html'</script>";
        }
    }
    if(isset($_REQUEST['cancel']))
    {
        echo "<script>window.location.href='Hotel.html'</script>";
    }
?>