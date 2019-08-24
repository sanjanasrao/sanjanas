<?php
session_start();
$y=$_SESSION['username']

?>



<html>
<?php
if(!($_SESSION['username']))
{
header("location: staff_login.php");
}




?>
<html>
<head>
<title>HOME</title>
</head>
<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE STAFF HOME PAGE..!</strong></b></font></marquee>

<style type="text/css">

body { 

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
color: blue; font-size:30px; }
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
<body   background="bg51.jpg" leftmargin="0" topmargin="" marginwidth="0" marginheight="0">
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="313"><table width="980" border="0" cellspacing="0" cellpadding="0">
        <tr>
		<td width="680"><img src="c18.png" width="680" height="300"></td>
          <td width="300"><img src="c14.png" width="300" height="300"></td>
          
        </tr>
    </table></td>
  </tr>
<tr>  
    <td><table width="980"  border="3" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#333333"><ul>

             <li><a href="sdetails.php"class="style5711">STAFF DETAILS</a></li>
			  <li><a href="ardetails.php" class="style5711">AREADETAILS</a></li>
			              <li><a href="fdetails.php" class="style571111">FAMILYDETAILS</a></li>
						  			              <li><a href="pdetails.php" class="style571111">PEOPLEDETAILS</a></li>

					             <li><a href="http://localhost/census/start.html" class="style5711">LOGOUT</a></li>



        </tr>
    </table></td>
  </tr>


</body>
</html>
