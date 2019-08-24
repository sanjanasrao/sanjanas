
<html>
<style>

body { 
background : url("bgfam2.png");
background-repeat:no-repeat;
 background-size: 180%;

}

input[type=submit] {
    width: 40%;
	position:right;
    background-color: #1234;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
input[type=reset] {
    width: 40%;
	position:right;
    background-color: #1234;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	font-weight:bold;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=reset]:hover{
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
 input[type=text], select {
    width: 40%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}	


div {
    height: 350px;
    width: 350px;
	position:absolute;
    top: 80px;
    right: 950px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 20px;
}
</style>
<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("census");
print "<h2 align='center'>CREATION of MySQL Trigger In PHP</h2>";
print "<h4 align='center'>people Table Content</h4>";
$result = mysql_query("select * from people");

echo "<table border='1' align='center'>

<tr align='center' bgcolor='grey'>

<th>pid</th>
<th>Pname</th>
<th>gender</th>
<th>age</th>
<th>home_id</th>
<th>sid</th>
<th>areaid</th>
</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr align='center' bgcolor='lightgrey'>";

echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['home_id'] . "</td>";
echo "<td>" . $row['sid'] . "</td>";
echo "<td>" . $row['areaid'] . "</td>";

echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>category  Table Content</h4>";

$result1 = mysql_query("select * from category");

echo "<table border='1' align='center'>

<tr align='center' bgcolor='grey'>



<th>no</th>

<th>gender</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr align='center' bgcolor='lightgrey'>";



echo "<td>" . $row['no'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";


echo "</tr>";

}

echo "</table>";

$sql = "CREATE TRIGGER MysqlTrigger1 AFTER INSERT ON people FOR EACH ROW UPDATE category SET no=no+1 WHERE gender=NEW.gender;";

mysql_query($sql,$con);

if( isset($_POST['submit']) )
	{
		$a = $_POST['pname'];
		$b = $_POST['gender'];
		$c = $_POST['age'];
		$d = $_POST['home_id'];
		$e = $_POST['sid'];
		$f = $_POST['areaid'];
		
		
		$qry = mysql_query("insert into people(pname,gender,age,home_id,sid,areaid) values('$a','$b','$c','$d','$e','$f')");


mysql_query($qry,$con);
	}
	
 
?>


<div>
<form method="post" action="">

<label for="password"><b> pname:</b></label> &nbsp
<input placeholder="Enter  pname" type="text" name="pname"/></br>

<label for="gender"><b>gender:</b></label> 
MALE:<input type="radio" name="gender"  value="male"/>
FEMALE:<input type="radio" name="gender" value="female"/></br>



<label for="password"><b>age:</b></label>  &nbsp
<input placeholder="Enter age " type="text" name="age"/></br>



<label for="password"><b> home_id:</b></label> &nbsp
<input placeholder="Enter  home_id" type="text" name="home_id"/></br>

<label for="password"><b>sid:</b></label>  &nbsp
<input placeholder="Enter sid" type="text" name="sid"/></br>
<label for="password"><b>areaid:</b></label>  &nbsp
<input placeholder="Enter areaid" type="text" name="areaid"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="reset" value="RESET"  /> </br>


Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>
</form>
</div>
<?php


print "<h4 align='center'>people Table Content</h4>";
$result = mysql_query("select * from people");

echo "<table border='1' align='center'>

<tr align='center' bgcolor='grey'>

<th>pid</th>
<th>Pname</th>
<th>gender</th>
<th>age</th>
<th>home_id</th>
<th>sid</th>
<th>areaid</th>

</tr>";

while($row = mysql_fetch_array($result))

{

echo "<tr align='center' bgcolor='lightgrey'>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['home_id'] . "</td>";
echo "<td>" . $row['sid'] . "</td>";
echo "<td>" . $row['areaid'] . "</td>";

echo "</tr>";

}

echo "</table>";
print "<h4 align='center'>category  Table Content</h4>";

$result1 = mysql_query("select * from category");

echo "<table border='1' align='center'>

<tr align='center' bgcolor='grey'>



<th>no</th>

<th>gender</th>

</tr>";

while($row = mysql_fetch_array($result1))

{

echo "<tr align='center' bgcolor='lightgrey'>";


echo "<td>" . $row['no'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysql_close($con);
print "</body>";

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
<table width='100' align='center border='5'>
<tr bgcolor ='grey'>
<th> home id </th>
   </tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");
$query="select * from family";
$run=mysql_query($query);
while ($row=mysql_fetch_array($run))
{
$home_id=$row[0];
$nbr_of_person=$row[1];
$fincome=$row[2];
$living_status=$row[3];
$areaid=$row[4];
?>
<tr align='center' bgcolor='lightgrey'>
<td>   <?php echo $home_id; ?></td>
</tr>

<?php  }
?>

<table width='100' align='center border='5'>
<tr bgcolor ='grey'>
   <th> sid </th>

<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

$query="select * from staff";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$id=$row[0];
$name=$row[1];
$address=$row[2];
$phno=$row[3];
$username=$row[4];
$password=$row[5];
$email=$row[6];
?>

<tr align='center' bgcolor='lightgrey'>
<td>   <?php echo $id; ?></td>
</tr>
<?php  }
?>
<a href="admin_home.php"><h1>Click here to Go Back</h1></a>
</html>