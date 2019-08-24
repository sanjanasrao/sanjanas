
<html>
<head>
<title>Family Register Form</title>

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
    background-color:#1234;
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
<body background="bgfam2.png" >

</body>
<body>


<div>
<form method="post" action="">
<label  for="reg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u><b>FAMILY&nbsp&nbspREGISTRATION&nbsp&nbspFORM</b></u></label><br><br>





<label for="nbr_of_person"><b>nbr of person</b></label> 
<input placeholder="Enter nbr of members" type="number" name="nbr_of_person" /></br>


<label for="fincome"><b>family income:</b></label> 
<input placeholder="Enter family income" type="number" name="fincome" /></br>



<label for="living_status"><b>living status:</b></label> 
<input placeholder="Enter living status" type="text" name="living_status" /></br>



<label for="areaid"><b>area id:</b></label> 
<input placeholder="Enter area id" type="number" name="areaid" /></br>


<label for="areaid"><b> sid:</b></label> 
<input placeholder="Enter sid" type="number" name="sid" /></br>




&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun2()"/>
<script> function fun2() { window.location="fdetails.php"; } </script></br>



</form>
</div>
</body>









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




</table>
























<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

if(isset($_POST['submit']))
{

 $nbr_of_person=$_POST['nbr_of_person'];
  $fincome=$_POST['fincome'];
  $living_status=$_POST['living_status'];
  $areaid=$_POST['areaid'];
    $sid=$_POST['sid'];



	
	

if($nbr_of_person =='')
{
echo "<script> alert('Please enter nbr_of_person')</script>";
exit();
}

if($fincome =='')
{
echo "<script> alert('Please enter fincome')</script>";
exit();
}

if($living_status =='')
{
echo "<script> alert('Please enter living_status')</script>";
exit();
}



if($areaid =='')
{
echo "<script> alert('Please enter areaid')</script>";
exit();
}


if($sid =='')
{
echo "<script> alert('Please enter sid')</script>";
exit();
}



$query= "insert into family(nbr_of_person,fincome,living_status,areaid,sid) values ('$nbr_of_person','$fincome','$living_status','$areaid','$sid')";

if(mysql_query($query))
{

echo "<script> alert('User is Succussfully registered')</script>";

}


}


?>





















<table width='100' align='right border='5'>
<tr bgcolor ='grey'>
   <th> areaid </th>
  
   


</tr>



<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

$query="select * from area";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$areaid=$row[0];
$areaname=$row[1];


?>

<tr align='center' bgcolor='lightgrey'>
<td>   <?php echo $areaid; ?></td>




</tr>

<?php  }
?>
</html>