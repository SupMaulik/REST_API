<?php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origion: *');

 $data=json_decode(file_get_contents("php://input"),true);
 $uid=$data['uid'];
include "config.php";
$sql="select * from user where id=$uid";
if($result = $conn->query($sql))
{

  if($result->num_rows > 0){

       $output=$result->fetch_all(MYSQLI_ASSOC);
       echo json_encode($output);



  } else{
      echo json_encode(array('message'=>'No Record Found.','status'=>false));
  }
} else{
  echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}