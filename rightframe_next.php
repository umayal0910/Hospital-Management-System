<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<form method="post" action="rightframe_next.php">
<p>PATIENT NAME=<strong><?php  echo $_SESSION['patient_name'];?></strong></p>
<p>PATIENT ID=<strong><?php  echo $_SESSION['patient_id'];?></strong></p>
<p>DOCTOR NAME=<strong><?php  echo $_SESSION['doctor_name'];?></strong></p>
<p>PATIENT DOB=<strong><?php  echo $_SESSION['patient_DOB'];?></strong></p>
<p>PATIENT ADDRESS=<strong><?php  echo $_SESSION['patient_address'];?></strong></p>
<p>PATIENT NUMBER=<strong><?php  echo $_SESSION['patient_number'];?></strong></p>
<p>PATIENT MAIL=<strong><?php  echo $_SESSION['patient_mail'];?></strong></p>
<p>PATIENT AGE=<strong><?php  echo $_SESSION['patient_age'];?></strong></p>
<p>ADMISSION DATE=<strong><?php  echo $_SESSION['admission_date'];?></strong></p>
<p>DISCHARGE DATE<strong><?php  echo $_SESSION['discharge_date'];?></strong></p>
<p>DESCRIPTION=<strong><?php  echo $_SESSION['description'];?></strong></p>
<button type="submit" name="ok">OK</button>
</form>
</center>
</body>
</html>

    



