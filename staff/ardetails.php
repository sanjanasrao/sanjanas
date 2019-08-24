<?php
session_start();
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
<title>AREA DETAILS</title>

<marquee behavior="scroll" direction="left"><font color="purple" size="6"><b><strong>WELCOME TO THE AREA DETAILS PAGE..!</strong></b></font></marquee>

<style type="text/css">



body { 

background-repeat:no-repeat;
 background-size: 100%;

}
.style5711 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style57111 {font-size: 9px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style57111 {font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style57112 {font-size: 9px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style571111 {font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
h1 {
    color: Linel;
    text-align: center;
}
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
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}	

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
  padding:15px;
    text-align: center;
}

</style>
</head>
<body background="bg55.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="313"><table width="980" border="0" cellspacing="0" cellpadding="0">
        <tr>
          		            <td width="200"><img src="usflats.png" width="400" height="300"></td>
          <td width="200"><img src="plane.png" width="350" height="300"></td>

					          <td width="200"><img src="indflats.png" width="250" height="300"></td>
         
        </tr>
    </table></td>
  </tr>

<tr><td><table width="980" border="0"cellspacing="0" cellpadding="0">
<tr><ul>
  <li><a class="active" href="http://localhost/census/staff/main_home.php">HOME</a></li>
  <li><a href="http://localhost/census/staff/area_reg.php"  class="style5711">AREA-REGISTRATION</a></li>
    <li><a href="http://localhost/census/staff/area_view_details.php"  class="style5711">VIEWDETAILS</a></li>
	  <li><a href="http://localhost/census/staff/area_search.php"  class="style5711">AREASEARCH</a></li>

<li><a href="http://localhost/census/staff/Logout_staff.php"  class="style5711">LOGOUT</a></li>



</ul>
</tr>
</table>
</td>
</tr>
  <tr>
    <td height="7" background="home.jpg"></td>
  </tr>
<tr>
















    
</body>








</html>