<style type="text/css">

body { 
background : url("bgfam2.png");
background-repeat:no-repeat;
 background-size: 100%;

}



</style>



<?php
	include_once 'dbconnect.php';

 
	if( isset($_GET['id']) )
	{
		$id = $_GET['id'];
		$res= mysql_query("SELECT * FROM people WHERE pid='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		$newName = $_POST['newName1'];
		$newphoneno = $_POST['newName2'];

		$newdept = $_POST['newName3'];
		$newsalary = $_POST['newName4'];
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE people SET pid='$newName',pname='$newphoneno',gender='$newdept',age='$newsalary' WHERE pid='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=apupdatedelete.php'>";
	}
	

?>
<body background="bgfam2.png">
<form  method="POST">
<table align="center" bgcolor="cream">
<tr><td>pid:</td><td> <input type="text" name="newName1" value="<?php echo $row['pid']; ?>"required/></td></tr>
<tr><td>pname:</td><td> <input type="text" name="newName2" value="<?php echo $row['pname']; ?>"required/></td></tr>

<tr><td>gender: </td><td><input type="text" name="newName3" value="<?php echo $row['gender']; ?>"required/></td></tr>
<tr><td>age: </td><td><input type="text" name="newName4" value="<?php echo $row['age']; ?>"required/></td></tr>

<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['pid']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="apupdatedelete.php"><h1>click here to goback</h1></a> 
</form>
</body>