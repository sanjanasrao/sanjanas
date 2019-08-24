<style>
body { 

background:url(bg51.jpg);
background-repeat:no-repeat;
 background-size: 100%;

}

</style>

<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM staff WHERE sid='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		$newName = $_POST['newName1'];
		$newphoneno = $_POST['newName2'];
		$newdept = $_POST['newName3'];
		$newsalary = $_POST['newName4'];
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE staff SET sid='$newName',password='$newphoneno',address='$newdept',phno='$newsalary' WHERE sid='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=supdatedelete.php'>";
	}
	?>
<body bgcolor="blue">
<form  method="POST">
<table align="center" bgcolor="cream">
<tr><td>sid:</td><td> <input type="text" name="newName1" value="<?php echo $row['sid']; ?>" ></td></tr>
<tr><td>password:</td><td> <input type="text" name="newName2" value="<?php echo $row['password']; ?>" required/></td></tr>
<tr><td>address: </td><td><input type="text" name="newName3" value="<?php echo $row['address']; ?>" required/></td></tr>
<tr><td>phno: </td><td><input type="text" name="newName4" value="<?php echo $row['phno']; ?>" pattern="[789][0-9]{9}" required/></td></tr>
<?php



?>
<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['sid']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="updatedelete.php"><h1>click here to goback</h1></a> 
</form>
</body>