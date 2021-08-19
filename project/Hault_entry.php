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
  $Station_NO = $_POST['Station_NO'];
  $Train_NO = $_POST['Train_NO'];
  $Arrival_Time = $_POST['Arrival_Time'];
  $Hault = $_POST['Hault'];

  $sql_query = "INSERT INTO Hault (Station_NO,Train_NO,Arrival_Time,Hault)
  VALUES ('$Station_NO','$Train_NO','$Arrival_Time','$Hault')";

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