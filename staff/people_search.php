

<style type='text/css'>
body { 
background : url("bgfam2.png");
background-repeat:no-repeat;
 background-size: 100%;

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
	color:white;
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
input[type=submit] {
    width: 80%;
    background-color: black;
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
    width: 450px;
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
<body>
<div>
<form action="people_search.php" method="get"><br/><br/>

<b>Search for the people here: </b><input type="text" name="value" placeholder="Search here" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp
<input type="submit" name="search" value="Search Now" style="width:100px;height:35px;font:bold 15px Times New Roman;"></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME PAGE" onclick="fun1()"/>
<script> function fun1() { window.location="pdetails.php"; } </script></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="LOG OUT" onclick="fun3()"/>
<script> function fun3() { window.location="Logout_people.php"; } </script></br>
</div>



</form>




</body>
</html>













<?php

mysql_connect("localhost","root","");
mysql_select_db("census") or die("cannot connect to the database");

if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query=mysql_query("select * from people where pid like '$search_value%'")or die (mysql_error());

if(mysql_num_rows($query)>0)

{
?>
<table width='800' align='center border='5'>
<tr bgcolor ='grey'>
   <th>  pid </th>
   <th> pname</th>
  
   </tr>
<?php
//$run=mysql_query($query);
while($row=mysql_fetch_array($query))
{
$pid=$row[0];
$pname=$row[1];
?>
<tr align='center' bgcolor='lightgry'>
<td>   <?php echo $pid; ?></td>
<td>   <?php echo $pname; ?> </td>
</tr>
<?php
}
}
else
{
	echo "<script>alert('Result Not Found !!!')</script>";
}
}	
?>
</html>
