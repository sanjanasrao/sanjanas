
<html>
<head>
<title>AREA REGISTRATION FORM</title>

</head>

<style>


body { 

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
    height: 500px;
    width: 400px;
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
<body background="bg55.jpg" >

</body>
<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>AREA&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>



<label for="areaname"><b>name:</b></label> 
<input placeholder="Enter your areaname" type="text" name="areaname" /></br>

<label for="sid"><b>sid:</b></label> 
<input placeholder="Enter your sid" type="number" name="sid" /></br>




&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>





Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="ardetails.php"; } </script></br>



Click here for &nbsp&nbsp
<input type="button" color="black"  value="VIEW DETAILS" onclick="fun1()"/>
<script> function fun1() { window.location="area_view_details.php"; } </script></br>




</form>
</div>
</body>


</html>

<table border="3" background="sanju.jpg" align="right" width="200" height="150">
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
 
 $areaname=$_POST['areaname'];
  $sid=$_POST['sid'];



if($areaname =='')
{
echo "<script> alert('Please enter your areaname')</script>";
exit();
}






if($sid =='')
{
echo "<script> alert('Please enter your sid')</script>";
exit();
}





$query= "insert into area(areaname,sid) values ('$areaname','$sid')";

if(mysql_query($query))
{

echo "<script> alert('areadetails Succussfully registered')</script>";

}


}


?>
