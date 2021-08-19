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
  $User_ID = $_POST['User_ID'];
  $Ticket_ID = $_POST['Ticket_ID'];
  $Passenger_ID = $_POST['Passenger_ID'];

  $sql_query = "INSERT INTO cancel (User_ID,Ticket_ID,Passenger_ID)
  VALUES ('$User_ID','$Ticket_ID','Passenger_ID')";

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