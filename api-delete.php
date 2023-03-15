<?php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origion: *');
 header('Access-Control-Allow-Methods: DELETE');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

 $data=json_decode(file_get_contents("php://input"),true);
 $uid=$data['uid'];
include "config.php";

$sql1="select *  from user where id=$uid";
$result1 = $conn->query($sql1);
  if($result1->num_rows > 0)
  {


$sql="DELETE  from user where id=$uid";
if($conn->query($sql) === true)
{

    echo json_encode(array('message'=>'User Record Deleted.','status'=>true));


  } 
}
  else{
      echo json_encode(array('message'=>'User Record not Found for Deletion.','status'=>false));
  }
