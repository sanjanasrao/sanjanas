





<style>
body { 

background:url(bg51.jpg);
background-repeat:no-repeat;
 background-size: 100%;

}

</style>

<?php 
include_once 'dbconnect.php';
$i=0;
$sqldata1="select * from staff";
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
        <td><?php echo $row['sid']; ?></td>
        <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['address']; ?></td>
         <td><?php echo $row['phno']; ?></td>
		          <td><?php echo $row['username']; ?></td>
				           <td><?php echo $row['password']; ?></td>
						   				           <td><?php echo $row['email']; ?></td>
       

        <td class="button">
            <a href="supdate.php?id=<?php echo $row['sid']; ?>"><input type="button" name="update" value="Update"></a>
            <a href="sdelete.php?id=<?php echo $row['sid']; ?>"><input type="button" name="delete" value="Delete"></a>
        </td>
    </tr>
<?php $i++; } ?>
</table>
<a href="admin_home.php"><h1>click here to goback</h1></a> 
</body>