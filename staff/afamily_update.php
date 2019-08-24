<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: staff_login.php");
}
?>
<head>
<title>Update family Information</title>
</head>


<style>
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}

th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
   }

input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
<body background="15.jpg" >
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='blue'>
   <th> home_id </th>
   <th>nbr_of_person</th>
   <th>fincome</th>
   <th>living_status</th>
   <th>areaid</th>


</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>FAMILY_DETAILS&nbsp&nbspUPDATE&nbsp&nbspFORM</b></u></label><br><br>





<label for="nbr_of_person"><b>nbr_of_person :</b></label> 
<input placeholder="Enter  member" type="number" name="nbr_of_person"/>



<label for="fincome">fincome<b>:</b></label> 
<input placeholder="Enter fincome" type="number" name="fincome"/>


<label for="living_status"><b>living_status:</b></label> 
<input placeholder="Enter  living_status" type="text" name="living_status"/></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_staff.php"; } </script></br>
</div>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");
$get_patriarch=$_SESSION['patriarch'];
$query="select * from family where patriarch='$get_patriarch'";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$home_id=$row[0];
$patriarch=$row[1];
$nbr_of_person=$row[2];
$fincome=$row[3];
$living_status=$row[4];
$areaid=$row[5];

?>

<tr align='center' bgcolor='yellow'>
<td>   <?php echo $home_id; ?></td>
<td>   <?php echo $patriarch; ?></td>
<td>   <?php echo $nbr_of_person; ?> </td>
<td>   <?php echo $fincome; ?> </td>
<td>   <?php echo $living_status; ?> </td>
<td>   <?php echo $areaid; ?> </td>




</tr>

<?php  }


if(isset($_POST['submit']))
{
 
$nbr_of_person=$_POST['nbr_of_person'];
 $fincome=$_POST['fincome'];
 $living_status=$_POST['living_status'];
 


if($nbr_of_person =='')
{
echo "<script> alert('Please  nbr_of_person')</script>";
exit();
}

if($fincome =='')
{
echo "<script> alert('Please enter your fincome')</script>";
exit();
}

if($living_status == '')
{
echo "<script> alert('Please enter  living_status')</script>";
exit();
}



$query="update family set nbr_of_person='$nbr_of_person',fincome='$fincome',living_status='$living_status'  where home_id='$get_home_id'";
if(mysql_query($query))
{
$_SESSION['patriarch']=$get_patriarch;
echo "<script> alert('Updated Successfully') </script>";
echo "<br>";
echo " <a href='afamily_view_details.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>