<style type="text/css">

body { 
background:url(bgfam2.png);
background-repeat:no-repeat;
 background-size: 100%;

}



</style>




<?php 
include_once 'dbconnect.php';
$i=0;

    $id = $_GET['id'];
    $delete = "DELETE FROM people WHERE pid='".$id."'";
       $a=mysql_query($delete);
if($a){
?>
<script>alert("one row deleted sucessfully");</script>
<?php
}



  $sqldata1="select * from people";
$sqldata=mysql_query($sqldata1);
?>
<body bgcolor="cream">
<table border=4 align="center">

<h1 align="center"> TABLE INFORMATION</h1>
<?php
while ($row = mysql_fetch_array($sqldata)) {
    $class = ($i%2==0) ? 'yellow':'#E6E6FA';

    ?>
    <tr bgcolor="<?php echo $class; ?>">
        <td><?php echo ($i+1); ?></td>
        <td><?php echo $row['pid']; ?></td>
        <td><?php echo $row['pname']; ?></td>
         
         <td><?php echo $row['gender']; ?></td>
		          <td><?php echo $row['age']; ?></td>
				           <td><?php echo $row['home_id']; ?></td>
						   <td><?php echo $row['sid']; ?></td>
						   <td><?php echo $row['areaid']; ?></td>

         
        <td class="button">
            <a href="apupdate.php?id=<?php echo $row['pid']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="apdelete.php?id=<?php echo $row['pid']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<a href="apupdatedelete.php"><h1>click here to goback</h1></a> 
</body>