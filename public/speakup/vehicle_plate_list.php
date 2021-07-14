<?php

require_once 'connect.php';

if (mysqli_connect_errno()){
    die('Unable to connect to datebase ' . mysqli_connect_error());
}

//$stmt = $conn->prepare("SELECT vehicles.vehicle, vehicles.body_plate, IFNULL(ROUND(AVG(reviews.ratings)),0) FROM vehicles LEFT JOIN reviews ON vehicles.body_plate=reviews.body_plate GROUP BY vehicles.body_plate;");
$stmt = $conn->prepare("SELECT vehicles.vehicle, vehicles.body_plate, IFNULL(ROUND(AVG(reviews.ratings)),0) FROM vehicles LEFT JOIN reviews ON vehicles.body_plate=reviews.body_plate  WHERE vehicles.vehicle='jeep' 
UNION SELECT vehicles.vehicle, vehicles.body_plate, IFNULL(ROUND(AVG(reviews.ratings)),0) FROM vehicles LEFT JOIN reviews ON vehicles.body_plate=reviews.body_plate  WHERE vehicles.vehicle='tricycle' 
UNION SELECT vehicles.vehicle, vehicles.body_plate, IFNULL(ROUND(AVG(reviews.ratings)),0) FROM vehicles LEFT JOIN reviews ON vehicles.body_plate=reviews.body_plate  WHERE vehicles.vehicle='taxicle' 
UNION SELECT vehicles.vehicle, vehicles.body_plate, IFNULL(ROUND(AVG(reviews.ratings)),0) FROM vehicles LEFT JOIN reviews ON vehicles.body_plate=reviews.body_plate  WHERE vehicles.vehicle='taxi' GROUP BY vehicles.body_plate;");

$stmt->execute();

$stmt->bind_result($vehicle, $body_plate, $ratings);

$items = array();

while($stmt->fetch()){
    $temp = array();
    $temp['vehicle'] = $vehicle;
    $temp['body_plate'] = $body_plate;
    $temp['ratings'] = $ratings;
    array_push($items, $temp);
}

echo json_encode($items);
?>