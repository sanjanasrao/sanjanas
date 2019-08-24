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
		$res= mysql_query("SELECT * FROM family WHERE home_id='$id'");
		$row= mysql_fetch_array($res);
	}
 if( isset($_POST['cse']) )
	{
		$newName = $_POST['newName1'];
		$newphoneno = $_POST['newName2'];
		$newdept = $_POST['newName3'];
		$newsalary = $_POST['newName4'];
		
		$id  	 = $_POST['id1'];
		$sql     = "UPDATE family SET home_id='$newName',nbr_of_person='$newphoneno',fincome='$newdept',living_status='$newsalary' WHERE home_id='$id'";
		

$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=fupdatedelete.php'>";
	}
	

?>
<body background="bgfam2.png">
<form  method="POST">
<table align="center" bgcolor="cream">
<tr><td>home_id:</td><td> <input type="text" name="newName1" value="<?php echo $row['home_id']; ?>"required/></td></tr>
<tr><td>nbr_of_person:</td><td> <input type="text" name="newName2" value="<?php echo $row['nbr_of_person']; ?>"required/></td></tr>
<tr><td>fincome: </td><td><input type="text" name="newName3" value="<?php echo $row['fincome']; ?>"required/></td></tr>
<tr><td>living_status: </td><td><input type="text" name="newName4" value="<?php echo $row['living_status']; ?>"required/></td></tr>

<tr>
<td><input type="hidden" name="id1" value="<?php echo $row['home_id']; ?>"/></td>
<td><input type="submit"  name="cse" value=" Update "/></td>
<td><input type="reset" name="reset" value="Reset"/></td></tr>

</table>
<a href="fupdatedelete.php"><h1>click here to goback</h1></a> 
</form>
</body>