<?php
session_start();
?>
<html>
<?php
if(!($_SESSION['username']))
{
header("location: admin_login.php");
}
?>

<html>
<head>
<title>ADMINHOME</title>
</head>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO ADMIN HOME PAGE..!</strong></b></font></marquee>

<style type="text/css">
body { 

background:url(bgadminhome22.png);
background-repeat:no-repeat;
 background-size: 100%;

}


{
	
size: 12px;
}

li a:link {
	text-decoration: none;
	color: #666;
}
li a:visited {
	text-decoration: none;
}
li a:hover {
	text-decoration: none;
}
li a:active {
	text-decoration: none;
	color: #666;
	font-size: 13px;
}

.style5711 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style571111 {font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

h{
color: red; font-size:30px; }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}


input[type=submit] {
    width: 200%;
	position:right;
    background-color: grey;
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
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
	div 
	{
   	position:absolute;
    right:750px;
    padding:10px;
	font-weight:bold;
	}
	
</style>
<body  background="bgadminhome2.png" leftmargin="0" topmargin="" marginwidth="0" marginheight="0">

 
<tr>  
    <td><table width="980" border="3" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td bgcolor="#333333"><ul>
		  
		  
		               <li><a href="http://localhost/census/staff/astaff_reg.php"class="style571111">STAFF-REGISTRATION</a></li>
              <li><a href="http://localhost/census/staff/astaff_view_details.php" class="style571111">VIEW DETAILS</a></li>
             <li><a href="http://localhost/census/staff/supdatedelete.php"class="style5711">UPDATE DELETE</a></li>
           <li><a href="http://localhost/census/staff/astaff_password.php" class="style5711">RESET PASSWORD</a></li>
		              <li><a href="http://localhost/census/staff/astaff_search.php" class="style5711">SEARCH</a></li>
					    
					  <li><a href="http://localhost/census/staff/Stored_procedure.php" class="style5711">STOREDPROC-staff-insert</a></li>
					  

              </tr>
    </table>
	
	
	
	<table width="980" border="3" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td bgcolor="#333333"><ul>
 
  
    <li><a href="http://localhost/census/staff/aarea_view_details.php"  class="style5711">AREA-VIEWDETAILS</a></li>
	  <li><a href="http://localhost/census/staff/aarea_search.php"  class="style5711">AREASEARCH</a></li>
              </tr>
    </table>
	
	
	
	
	<table width="980" border="3" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td bgcolor="#333333"><ul>

 
            <li><a href="http://localhost/census/staff/afamily_view_details.php" class="style571111">FAMILY-VIEW DETAILS</a></li>
		              <li><a href="http://localhost/census/staff/updatedelete.php" class="style5711">FAMILY-UPDATE-DELETE</a></li>

		              <li><a href="http://localhost/census/staff/afamily_search.php" class="style5711">FAMILY-SEARCH</a></li>
              </tr>
    </table>
	
	
	
	
	
	<table width="980" border="3" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td bgcolor="#333333"><ul>
 
            <li><a href="http://localhost/census/staff/apeople_view_details.php" class="style571111">PEOPLE-VIEW DETAILS</a></li>
		              <li><a href="http://localhost/census/staff/apupdatedelete.php" class="style5711">PEOPLE-UPDATE-DELETE</a></li>

		              <li><a href="http://localhost/census/staff/apeople_search.php" class="style5711">SEARCH</a></li>
					  
					  <li><a href="http://localhost/census/staff/triger_insert.php" class="style5711">TRIGGER-people-insert</a></li>
						  <li><a href="http://localhost/census/staff/triger_delete.php" class="style5711">TRIGGER-people-delete</a></li>
					
              </tr>
    </table>
	
	
	
</td></td>





  </tr>

<a href="admin_login.php"><h2>  LOGOUT</h2></a> 
</body>
</html>
