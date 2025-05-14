<?php
    include("Connection.php");
     if(isset($_REQUEST['update']))
     {

        $id=$_REQUEST['id'];
        $name=$_REQUEST['Name'];
        $email=$_REQUEST['Email'];
        $hotel=$_REQUEST['Hotel'];
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
        $q="UPDATE `booking` SET `uname`='$name',`uemail`='$email',`hname`='$hotel',`uphno`='$phone',`uperson`='$day',`uroom`='$room',`typeroom`='$type',`adate`='$adate',`ddate`='$ddate' WHERE uid='$id'";
        $run=mysqli_query($conn,$q);
        if($run==true)
        {
            //echo $q;
            echo "<script>alert('Update Details Successfully');</script>";
            echo "<script>window.location.href='showbooking details.php'</script>";
        }
    }

?>