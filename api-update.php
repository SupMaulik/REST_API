<?php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origion: *');
 header('Access-Control-Allow-Methods: PUT');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

 $data=json_decode(file_get_contents("php://input"),true);
 $uid=$data['sid'];
 $uname=$data['sname'];
 $uage=$data['sage'];
 $ucity=$data['scity'];
include "config.php";
$sql="update   user set name='$uname',age=$uage,city='$ucity' where id=$uid";
if($conn->query($sql) === true)
{

    echo json_encode(array('message'=>'User Record Updated.','status'=>true));

   
} else{
    echo json_encode(array('message'=>'User Record Not Updated.','status'=>false));
}