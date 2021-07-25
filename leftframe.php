<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body> 
<center>
<h2>PATIENT DETAILS</h2>
<form action="leftframe.php" method="POST">
<table>
<tr>
<td>Patient Name</td>
<td><input type="text"   name="name1" placeholder="your name*" ></td>
</tr>
<tr>
<td>Patient Id</td>
<td><input type="text"  name="id" placeholder="id*" ></td>
</tr>
<tr>
<td>Doctor Name</td>
<td><input type="text"   name="name2" placeholder="doc name*" ></td>
</tr>
<tr>
<td>Patient Dob</td>
<td><input type="text"  name="name3" placeholder="your dob*" ></td>
</tr>
<tr>
<td>Patient Address</td>
<td><input type="text"   name="name4" placeholder="your address*" ></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text"  name="num" placeholder="your no*" ></td>
</tr>
<tr>
<td>Patient Email</td>
<td><input type="text"   name="pmail" placeholder="your email*" ></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio"  name="male"/>MALE</td>
<td><input type="radio"  name="female"/>FEMALE</td>
</tr>
<tr>
<td>Age</td>
<td><input type="text"   name="name5" placeholder="your age*" ></td>
</tr>
<tr>
<td>Admission date</td>
<td><input type="text"   name="name6" placeholder="date*" ></td>
</tr>
<tr>
<td>Discharge date</td>
<td><input type="text"   name="name7" placeholder="date*" ></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text"  name="name8" placeholder="your description*" ></td>
</tr>
<tr><center>
<td><input type="submit" name="submit"  ></td>
</center></tr>
<tr><center>
<td><input type="reset" name="reset" ></td>
</center></tr>
</table></form>
</center></body>
</html>
