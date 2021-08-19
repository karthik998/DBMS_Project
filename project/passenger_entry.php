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
  $Passenger_ID = $_POST['Passenger_ID'];
  $User_ID = $_POST['User_ID'];
  $Status = $_POST['Status'];
  $Seat_Number = $_POST['Seat_Number'];
  $pnr_no = $_POST['pnr_no'];
  $ticket_id = $_POST['ticket_id'];

  $sql_query = "INSERT INTO passenger  (Passenger_ID,User_ID,Status,Seat_Number,pnr_no,ticket_id)
  VALUES ('$Passenger_ID','$User_ID','$Status','$Seat_Number','$pnr_no','$ticket_id')";

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