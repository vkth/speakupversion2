<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $id = $_POST['id'];

    require_once 'connect.php';

    $sql = "SELECT * FROM mobileappusers WHERE id='$id' ";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['read'] = array();

    if( mysqli_num_rows($response) === 1 ) {
        
        if ($row = mysqli_fetch_assoc($response)) {
 
             $h['name']        = $row['name'] ;
			 $h['username']       = $row['username'] ;
			 //$h['password']       = $row['password'] ;
			 $h['phone_number']       = $row['phone_number'] ;
             $h['email']       = $row['email'] ;
			 $h['address']       = $row['address'] ;
			 $h['status']       = $row['status'] ;
 
             array_push($result["read"], $h);
 
             $result["success"] = "1";
             echo json_encode($result);
        }
 
   }
 
 }else {
 
     $result["success"] = "0";
     $result["message"] = "Error!";
     echo json_encode($result);
 
     mysqli_close($conn);
 }
 
 ?>