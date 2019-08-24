<?php
session_start();
?>
<html>

<head>
<title>STAFF DELETE INFORMATION</title>
</head>


<style>

body { 
background:url(bg51.jpg);
background-repeat:no-repeat;
 background-size: 100%;

}


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
    background-color: #1234;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid ;
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
    background-color: black;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
div {
    height: 500px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color:#1234;
    padding: 20px;
}

</style>
<body   width="100%" height="100%"  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
</body>
<body>

<div>
<form method="post" action="">
<table width='800' align='center border='5'>
<tr bgcolor ='grey'>
   <th>sid</th>
   <th>name</th>
     <th>address</th>
	 <th>phno</th>
   <th>username</th>
   <th>password</th>
<th>email</th>

</tr>

</br>




<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>STAFF_DETAILS&nbsp&nbspDELETE&nbsp&nbspFORM</b></u></label><br><br>



<label for="password"><b>username</b></label> 
<input placeholder="Enter user name" type="text" name="username"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_admin.php"; } </script></br>
</form>
</div>


</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");
$query="select * from staff ";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$sid=$row[0];
$name=$row[1];
$address=$row[2];
$phno=$row[3];
$username=$row[4];
$password=$row[5];
$email=$row[6];
?>

<tr align='center' bgcolor='lightgrey'>
<td>   <?php echo $sid; ?></td>
<td>   <?php echo $name; ?> </td>
<td>   <?php echo $address; ?> </td>
<td>   <?php echo $phno; ?> </td>
<td>   <?php echo $username; ?> </td>
<td>   <?php echo $password; ?> </td>
<td>   <?php echo $email; ?> </td>


</tr>

<?php  }


if(isset($_POST['submit']))
{
$username=$_POST['username'];

$query="delete from staff where username='$username'";
if(mysql_query($query))
{
echo "<script> alert('deleted Successfully') </script>";
echo "<br>";
echo " <a href='staff_view_details.php'>View result</a>"; 
} 

else { 
echo "ERROR"; 
} 
}

?> 
</html>