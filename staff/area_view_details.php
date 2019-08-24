



<html>
<head>
<title>AREA Register Form</title>

</head>

<style>

body { 

background-repeat:no-repeat;
 background-size: 100%;

}

div {
    height: 550px;
    width: 550px;
	position:absolute;
    top: 300px;
    right: 750px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 20px;
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

</style>
<body background="bg55.jpg" >
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='grey'>
   <th> areaid </th>
   <th> areaname</th>
   <th>sid</th>


</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="ardetails.php"; } </script></br>




Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_staff.php"; } </script></br>

</form>
</div>








</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

$query="select * from area";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$areaid=$row[0];
$areaname=$row[1];

$sid=$row[2];
?>

<tr align='center' bgcolor='lightgrey'>
<td>   <?php echo $areaid; ?></td>
<td>   <?php echo $areaname; ?> </td>
<td>   <?php echo $sid; ?> </td>



</tr>

<?php  }
?>
