<?php
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origion: *');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

 $data=json_decode(file_get_contents("php://input"),true);
 $uname=$data['sname'];
 $uage=$data['sage'];
 $ucity=$data['scity'];
include "config.php";
$sql="insert into user(name,age,city) values('$uname',$uage,'$ucity')";
if($conn->query($sql) === true)
{

    echo json_encode(array('message'=>'User Record Inserted.','status'=>true));

   
} else{
    echo json_encode(array('message'=>'User Record Not Inserted.','status'=>false));
}