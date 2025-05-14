<?php
//Access Session from login file
    SESSION_START();
    if(isset($_SESSION['$email']))
    {
        // $e= $_SESSION['$email'];
        // echo  "   ".$_SESSION['$pass'];
        // echo "<script>alert(e);</script>";
       // echo "<script>location.href='showbooking details.php'</script>";
    }
     else
    {
        echo "<script>location.href='LoginSS.php'</script>";
    }

include("connection.php");
$details="select * from booking";
$data=mysqli_query($conn,$details);
$total=mysqli_num_rows($data);
if($total!=0)
{
?>
<nav>
		<div class="left">
		  <span>SkyLight</span>
		</div>
		<div class="right">
		  <ul>
			<li><a class="a1" href="index.html">Back</a></li>
            <li><a class="a1" href="logout.php">Logout</a></li>
		  </ul>
		</div>
	  </nav>
    <link rel="stylesheet" type="text/css" href="room.css"> 
   

<div class="record">
<h2 align="center">User Information Table</h2>
</div>
<center>
<table border="5" width="100%" >
<th width="3%">ID</th> 
<th width="13%">Name</th> 
<th width="9%">Email</th>
<th width="8%">Hotel</th>
<th width="8%">Phone</th>
<th width="5%">Days</th>
<th width="8%">Room No.</th>
<th width="8%">Room Type</th>
<th width="6%">Amount</th>
<th width="10%">Arrival Date</th>
<th width="10%">Depart Date</th>
<th width="8%">Update</th>
<th width="10%">Delete</th>
</tr>
<?php
	while($result=mysqli_fetch_assoc($data))
	{
        ?>
		<tr>
        <td><?php echo $result['uid']; ?></td>
		<td><?php echo $result['uname']; ?></td>
		<td><?php echo $result['uemail']; ?></td>
        <td><?php echo $result['hname']; ?></td>
		<td><?php echo $result['uphno']; ?></td>
		<td><?php echo $result['uperson']; ?></td>
		<td><?php echo $result['uroom']; ?></td>
		<td><?php echo $result['typeroom']; ?></td>
		<td><?php echo $result['amount']; ?></td>
		<td><?php echo $result['adate']; ?></td>
        <td><?php echo $result['ddate']; ?></td>
		
        <td><a href="update.php?uid=<?php echo $result['uid'];?>&uname=<?php echo $result['uname'];?>&uemail=<?php echo $result['uemail'];?>&hname=<?php echo $result['hname'];?>&uphno=<?php echo $result['uphno'];?>&uperson=<?php echo $result['uperson'];?>&uroom=<?php echo $result['uroom'];?>&typeroom=<?php echo $result['typeroom'];?>&adate=<?php echo $result['adate'];?>&ddate=<?php echo $result['ddate'];?>"><input type='submit' name='update' value='Update' class='update'></a></td>
        <td><a href="delete.php?uid=<?php echo $result['uid'];?>"><input type='submit' name='delete' value='Delete' class='delete'></a></td>
        </tr>
        <?php
	
}
}
else
{
	echo"<h1 style='color:white'; ><center>No Booking Found<center><h1>";
}

?>
</table>
<script>
function checkdelete()
{
	return confirm('Are You Sure you want to Delete the Data?');
}
</script>
<style>
        table {
    margin: 0 auto;
    text-align: center;
    border-color:hsl(203, 60%, 61%);
}

tr{
    text-align: center;
    font-size:20px;
}

td {
    text-align: center;
    padding: 12px 12px;
    font-size:18px;
}

body{
	background-color: hsl(203, 60%, 61%);
}
table{
	background-color:white;
}
.record h2{
	font-size:300%;
	color:white;
   
	transition:0.5s;
}
.update{
            background-color: hsl(203, 60%, 61%);
            font-weight: 6px;
            font-size: large;
            width: 100%;
            height:28px;
            color: #ffffff;
            border: #ffffff;
            padding: 4px;
            border-radius: 10px;
        }
        .update:hover{background-color: #0b51d3;}
  
.delete{
    background-color: hsl(203, 60%, 61%);
            font-weight: 6px;
            font-size: large;
            width: 100%;
            height:28px;
            color: #ffffff;
            border: #ffffff;
            padding: 4px;
            border-radius: 10px;
}
.delete:hover{background-color: #0b51d3;}
    </style>
<?php
if(isset($_REQUEST['delete']))
{
   //   $id=$_REQUEST['id'];
      $q="DELETE FROM `booking` WHERE uid='$id'";
      echo $id;
      $result=mysqli_query($conn,$q);
      // if($result){
      //     //header("refresh:0;url=navigation1.php");
      //     //echo "<script>window.location.reload('admin.php')</script>";
      //     echo "<script>window.location.reload('admin.php')</script>"
      // }
      // else{
      //     echo "ERROR";
      // }
      }

?>