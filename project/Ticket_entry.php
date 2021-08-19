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
  $Ticket_ID = $_POST['Ticket_ID'];
  $User_ID = $_POST['User_ID'];
  $Status = $_POST['Status'];
  $No_Of_Passengers = $_POST['No_Of_Passengers'];
  $Train_NO = $_POST['Train_NO'];

  $sql_query = "INSERT INTO Ticket (Ticket_ID,User_ID,Status,No_Of_Passengers,Train_NO)
  VALUES ('$Ticket_ID','$User_ID','$Status','$No_Of_Passengers','$Train_NO')";

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