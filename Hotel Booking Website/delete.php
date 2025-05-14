<?php
      include("connection.php");
      $id=$_REQUEST['uid'];
      $q="DELETE FROM `booking` WHERE uid='$id'";
      echo $id;
      echo $q;
      $result=mysqli_query($conn,$q);
      if($result){
            echo "<script>alert('Booking Deleted Successfully');</script>";
            echo "<script>window.location.href='showbooking details.php'</script>";
      }
      else{
            echo "<script>alert('Booking Not Deleted Successfully');</script>";
            echo "<script>window.location.href='showbooking details.php'</script>";
      }

?>