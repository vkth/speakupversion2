<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

// 	$user_id = $_POST['user_id'];
//     $body_plate = $_POST['body_plate'];
// 	$date = $_POST['date'];
//     $time = $_POST['time'];
// 	$narrative = $_POST['narrative'];
// 	$vehicle = $_POST['vehicle'];
// 	$file = $_POST['file'];

    require_once 'connect.php';
	
	$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;
    $body_plate = isset($_POST['body_plate']) ? $_POST['body_plate'] : null;
	$date = isset($_POST['date']) ? $_POST['date'] : null;
    $time = isset($_POST['time']) ? $_POST['time'] : null;
	$narrative = isset($_POST['narrative']) ? $_POST['narrative'] : null;
    $vehicle = isset($_POST['vehicle']) ? $_POST['vehicle'] : null;
	$file = isset($_POST['file']) ? $_POST['file'] : null;
    $filename = "Complaint_".$user_id."_".$body_plate."_".$date."_".$time.".jpg";
	file_put_contents("speakupmobile/images/complaints_images/".$filename,base64_decode($file));
	

    $sql = "INSERT INTO complaints (user_id, body_plate, narrative, date, time, vehicle, file, status) VALUES ('$user_id', '$body_plate', '$narrative', '$date', '$time', '$vehicle', '$filename', 'pending')";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>