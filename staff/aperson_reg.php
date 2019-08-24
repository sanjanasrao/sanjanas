
<html>
<head>
<title> Register Form</title>

</head>

<style>

body { 
background : url("bgfam2.png");
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
input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
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
    width: 60%;
    background-color: #1234;
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
    background-color: black;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 500px;
	position:absolute;
    top: 80px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 20px;
}
</style>
<body background="12.jpg" >

</body>
<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>



<label for="pname"><b>name:</b></label> 
<input placeholder="Enter your name" type="text" name="pname" /></br>
 
 
 
<label for="adhar_nbr"><b>adhar number</b></label> 
<input placeholder="Enter your adhar number" type="number" name="adhar_nbr" /></br>






<label for="gender"><b>gender:</b></label> 
<input placeholder="Enter your gender" type="text" name="gender" /></br>



<label for="age"><b>age:</b></label> 
<input placeholder="Enter your age" type="number" name="age" min="1" max="100" /></br>

<label for="home_id"><b>homeid:</b></label> 
<input placeholder="Enter your homeid" type="number" name="home_id" /></br>

<label for="sid"><b>sid:</b></label> 
<input placeholder="Enter sid" type="number" name="sid" /></br>

<label for="areaid"><b>areaid:</b></label> 
<input placeholder="Enter area id" type="number" name="areaid" /></br>




&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="admin_home.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOGIN PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="staff_login.php"; } </script></br>

</form>
</div>
</body>


</html>












<table border="3" background="sanju.jpg" align="right" width="200" height="200">
<tr align="center"><th>sid</th>  </tr>





<?php

session_start();

mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");
$get_username=$_SESSION['username'];
$query="select sid from staff where username='$get_username'";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$sid=$row[0];

}
?>

<tr align="center" valign="center" bgcolor="lightgrey">
<td>   <?php echo $sid; ?></td>
</tr>


</th>
</tr>
</table>


















<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
 
 $pname=$_POST['pname'];
  $adhar_nbr=$_POST['adhar_nbr'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
    $home_id=$_POST['home_id'];
	  $sid=$_POST['sid'];
	    $areaid=$_POST['areaid'];



if($pname =='')
{
echo "<script> alert('Please enter pname')</script>";
exit();
}

if($adhar_nbr =='')
{
echo "<script> alert('Please enter adhar_nbr')</script>";
exit();
}

if($gender =='')
{
echo "<script> alert('Please enter gender')</script>";
exit();
}



if($age =='')
{
echo "<script> alert('Please enter age')</script>";
exit();
}

if($home_id =='')
{
echo "<script> alert('Please enter home_id')</script>";
exit();
}

if($sid =='')
{
echo "<script> alert('Please enter sid')</script>";
exit();
}

if($age =='')
{
echo "<script> alert('Please enter areaid')</script>";
exit();
}



$query= "insert into people(pname,adhar_nbr,gender,age,home_id,sid,areaid) values ('$pname','$adhar_nbr','$gender','$age','$home_id','$sid','$areaid')";

if(mysql_query($query))
{

echo "<script> alert('User is Succussfully registered')</script>";

}


}


?>
