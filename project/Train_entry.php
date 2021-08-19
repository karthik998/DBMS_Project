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
  $Train_NO = $_POST['Train_NO'];
  $Train_Name = $_POST['Train_Name'];
  $Arrival_Time = $_POST['Arrival_Time'];
  $Departure_Time = $_POST['Departure_Time'];
  $Availability = $_POST['Availability'];
  $Date = $_POST['Date'];
  $sql_query = "INSERT INTO Train (Train_NO,Train_Name,Arrival_Time,Departure_Time,Availability,Date)
  VALUES ('$Train_NO','$Train_Name','$Arrival_Time','$Departure_Time','$Availability','$Date')";

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