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
  $S_ID = $_POST['S_ID'];
  $NAME = $_POST['NAME'];
  $EMAIL = $_POST['EMAIL'];
  $ADDRESS = $_POST['ADDRESS'];
  

  $sql_query = "INSERT INTO passenger  (S_ID,NAME,EMAIL,ADDRESS)
  VALUES ('$S_ID','$NAME','$EMAIL','$ADDRESS')";

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