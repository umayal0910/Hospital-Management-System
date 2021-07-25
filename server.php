<?php
session_start();
$errors=array();
$conn=mysqli_connect("localhost","root","","dbapp");



//This is for leftframe where patient information are being registered
if(isset($_POST['submit']))
{
    $patient_name=mysqli_real_escape_string($conn,$_POST['name1']);
    $patient_id=mysqli_real_escape_string($conn,$_POST['id']);
    $doc_name=mysqli_real_escape_string($conn,$_POST['name2']);
    $patient_dob=mysqli_real_escape_string($conn,$_POST['name3']);
    $patient_address=mysqli_real_escape_string($conn,$_POST['name4']);
    $patient_number=mysqli_real_escape_string($conn,$_POST['num']);
    $patient_email=mysqli_real_escape_string($conn,$_POST['pmail']);
    $patient_age=mysqli_real_escape_string($conn,$_POST['name5']);
    $admission_date=mysqli_real_escape_string($conn,$_POST['name6']);
    $discharge_date=mysqli_real_escape_string($conn,$_POST['name7']);
    $description=mysqli_real_escape_string($conn,$_POST['name8']);
    if(empty($patient_name))
    {
        array_push($errors,"patient name is required");
    }
    if(empty($patient_id))
    {
        array_push($errors,"patient id is required");
    }
    if(empty($doc_name))
    {
        array_push($errors,"doctor name is required");
    }
    if(empty($patient_dob))
    {
        array_push($errors,"Patient DOBis required");
    }
    if(empty($patient_address))
    {
        array_push($errors,"patient address is required");
    }
    if(empty($patient_number))
    {
        array_push($errors,"patient number is required");
    }
    if(empty($patient_email))
    {
        array_push($errors,"patient email is required");
    }
    if(empty($patient_age))
    {
        array_push($errors,"patient age is required");
    }
    if(empty($admission_date))
    {
        array_push($errors,"admission date is required");
    }
    if(empty($discharge_date))
    {
        array_push($errors,"discharge date is required");
    }
    if(empty($description))
    {
        array_push($errors,"description is required");
    }
    if(count($errors)==0)
    {
        $query="INSERT INTO hospital (patient_name,patient_id,doctor_name,patient_DOB,patient_address,patient_number,patient_mail,patient_age,admission_date,discharge_date,description) VALUES 
        ('$patient_name','$patient_id','$doc_name','$patient_dob','$patient_address','$patient_number',
        '$patient_email','$patient_age','$admission_date','$discharge_date','$description')";
        mysqli_query($conn,$query);
        header('location:left.php');
    }

}


//this is for the right frame to get the information about the patient once the patient id is entered
if(isset($_POST['getinfo']))
{
    $patient_id=mysqli_real_escape_string($conn,$_POST['patient_id']);
    if(empty($patient_id))
    {
        array_push($errors,"PATIENT ID IS REQUIRED");
    }
    if(count($errors)==0)
    {
        $query="SELECT * FROM hospital WHERE patient_id='$patient_id'";
        $result=mysqli_query($conn,$query);
        $user=mysqli_fetch_assoc($result);
        $_SESSION['patient_name']=$user['patient_name'];
        $_SESSION['patient_id']=$user['patient_id'];
        $_SESSION['doctor_name']=$user['doctor_name'];
        $_SESSION['patient_DOB']=$user['patient_DOB'];
        $_SESSION['patient_address']=$user['patient_address'];
        $_SESSION['patient_number']=$user['patient_number'];
        $_SESSION['patient_mail']=$user['patient_mail'];
        $_SESSION['patient_age']=$user['patient_age'];
        $_SESSION['admission_date']=$user['admission_date'];
        $_SESSION['discharge_date']=$user['discharge_date'];
        $_SESSION['description']=$user['description'];
        header('location:rightframe_next.php');
      
    }

}


//this is after we have read the patient details
if(isset($_POST['ok']))
{
    header('location:ryt.php');
}
?>