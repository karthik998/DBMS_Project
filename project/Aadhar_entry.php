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
  $Aadhar_no = $_POST['Aadhar_no'];
  $First_name = $_POST['First_name'];
  $Last_name = $_POST['Last_name'];
  $Gender = $_POST['Gender'];
  $Mobile = $_POST['Mobile'];
  $State = $_POST['State'];
  $City = $_POST['City'];
  $Pin = $_POST['Pin'];
  
  $sql_query = "INSERT INTO aadhar (Aadhar_no,First_name,Last_name,Gender,Mobile,State,City,Pin)
  VALUES ('$Aadhar_no','$First_name','$Last_name','$Gender','$Mobile','$State','$City','$Pin')";

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