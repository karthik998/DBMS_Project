<?php
$host="localhost";
$dbusername="root";
$password="";
$dbname="dbms_project";

$conn=mysqli_connect($host,$dbusername,$password,$dbname);

if(!$conn)
{
   die("Connection Failed:".mysqli_connect_error());
}

if(isset($_POST['save']))
{
  $User_id = $_POST['User_id'];
  $Aadhar_no = $_POST['Aadhar_no'];
  $age = $_POST['age'];
  $email = $_POST['email'];

  $sql_query = "INSERT INTO user (User_id,Aadhar_no,age,email)
  VALUES ('$User_id','$Aadhar_no','$age','$email')";

  if (mysqli_query($conn, $sql_query))
  {
    echo "New Details Entry inserted successfully !";
  }
  else
  {
    echo "Error: ".$sql."".mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>