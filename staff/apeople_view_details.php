<html>
<head>
<title>people view details form</title>

</head>

<style>

body { 
background : url("bgfam2.png");
background-repeat:no-repeat;
 background-size: 100%;

}

div {
    height: 400px;
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
<form action="" method="post">
<table width='800' align='center border='5'>
<tr bgcolor ='grey'>
   <th>  pid </th>
   <th> pname</th>

   <th>gender</th>
   <th>age</th>
      <th>homeid</th>
	     <th>sid</th>
		    <th>areaid</th>


</tr>
<div>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.php"; } </script></br>




Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_staff.php"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>

<?php
mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

$query="select * from people";
$run=mysql_query($query);

while ($row=mysql_fetch_array($run))
{
$pid=$row[0];
$pname=$row[1];

$gender=$row[2];
$age=$row[3];
$home_id=$row[4];
$sid=$row[5];
$areaid=$row[6];

?>

<tr align='center' bgcolor='lightgrey'>
<td>   <?php echo $pid; ?></td>
<td>   <?php echo $pname; ?> </td>

<td>   <?php echo $gender; ?> </td>
<td>   <?php echo $age; ?> </td>
<td>   <?php echo $home_id; ?> </td>
<td>   <?php echo $sid; ?> </td>
<td>   <?php echo $areaid; ?> </td>




</tr>

<?php  }
?>
</html>