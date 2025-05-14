<?php
    include("connection.php");
   
        $id=$_REQUEST['uid'];
         $name=$_REQUEST['uname'];
        $email=$_REQUEST['uemail'];
        $hotel=$_REQUEST['hname'];
        $phone=$_REQUEST['uphno'];
        $day=$_REQUEST['uperson'];
        $room=$_REQUEST['uroom'];
        $typeroom=$_REQUEST['typeroom'];
        $adate=$_REQUEST['adate'];
        $ddate=$_REQUEST['ddate'];
        // echo $id;
        // echo $name;
        if($typeroom=="AC")
        {
            $amount=800*$day;
        }
        else
        {
            $amount=500*$day;
        }
    
    
      
  


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <nav>
		<div class="left">
		  <span>SkyLight</span>
		</div>
		<div class="right">
		  <ul>
			<li><a href="showbooking details.php">Back</a></li>
		  </ul>
		</div>
	  </nav>
    <link rel="stylesheet" type="text/css" href="room.css">
    <link rel="stylesheet" href="room1.css">

      <h1 style="color:#ffffff;text-align: center; font-size: 50px;">Hotel Room Booking Form</h1>
        <Form name="f1" method="GET" action="updateq.php">
           <center><div class="box">
         <table border="0" >
          <tr>
            <td><label class="label">User ID: </label>  </td>
            <td><input type="text" size="40" name="id" placeholder="ID" required class="i" value="<?php echo $id ?>"></td>
        </tr>
            <tr>
                <td><label class="label"> Name: </label>  </td>
                <td><input type="text" size="40" name="Name" placeholder="Name" class="i" required value="<?php echo $name?>"></td>
            </tr>
            <tr>
                <td><label class="label">E-Mail:</label> </td>
            <td> <input type="email" size="40" name="Email" placeholder="Email" class="i" required value="<?php echo $email?>"></td>
               
            </tr>
            <tr>
                <td><label class="label"> Hotel: </label></td>
            <td><input typ="text" size="40" name="Hotel" placeholder="hotel" class="i" required value="<?php echo $hotel?>"></td><br>
            </tr>
           <tr>
                <td><label class="label">Enter Phone : </label></td>
                <td><input type="number" size="40" Name="Phone" placeholder="Phone" class="i" required value="<?php echo $phone?>"></td><br>
            </tr>
            <tr>
                <td><label class="label">  Statying Days </label></td>
                <td><input type="number" name="Day" min="1"  size="70"class="i"  required value="<?php echo $day?>"></td>
            </tr>
           <tr>
                <td><label class="label">Room No. :</label></td>
                <td><input type="number" min="1" size="50" name="Room" class="i" required value="<?php echo $room?>"></td>
            </tr>
           <tr>
                <td><label class="label";>Type Of Room:</label> </td>
                <td><input type="radio" name="rd" value="<?php echo $typeroom?>"  checked>AC
                    <input type="radio" name="rd"  value="<?php echo $typeroom?>" checked>Non/AC </td>
            </tr>
           <tr>
                <td> <label class="label"> Arrival Date:</label></td>
            <td> <input type="date" size="70" name="ADate" class="i" required value="<?php echo $adate?>"></td>
            </tr>
            <tr>
                <td><label class="label">  Depart Date: </label></td>
            <td><br><input type="date" size="70" name="DDate" class="i" required value="<?php echo $ddate?>"><br><br> </td>
            </tr>
        </td>
    </tr>
        </table>
        <br>
        <div class="btn">
                <input type="submit" name="update" class="b1" value="Update"/>
                <input type="submit" name="cancel" class="b1"  value="Cancel"/>
        </div>
    </center> 
    </div>
    </Form>

</body>
</html>
<style>
    
    .box{
            
        width:750px;
        height:1050px;
        border-radius:40px;
        border:1px solid white;
        padding:10 px;
        margin:15px;
        background-color:hsl(200deg 1% 100%);
        box-shadow:0 0 2em hsl(200, 97%, 13%);
        font-size: 20px;
    }
    table {
        border-collapse: collapse;
        border-spacing: 10px;
}

td, th {
  padding: 10px;
}
body{
	background-color:hsl(203, 52%, 67%);
	color:hsl(250deg 200% 70%);
	}
    .b1{
            background-color: hsl(203, 60%, 61%);
            font-weight: 600;
            font-size: large;
            width: 35%;
            color: #ffffff;
            border: #ffffff;
            padding: 10px;
            border-radius: 10px;
        }
        .b1:hover{background-color: #0b51d3;}

  form .i {
	display: block;
	width: 80%;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	background-color: #e4e2e2bf;
	border-radius: 5px;
	box-shadow: 0 0 5px rgba(0,0,0,0.1);
    font-size: 20px;

}
label {
 color: black;
  margin-left:75px;
}
</style>

