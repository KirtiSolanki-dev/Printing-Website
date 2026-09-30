<?php

// $conn = mysqli_connect("localhost", "root", "", "indupr");

// if(!$conn){
//     die("Connection Failed");
// }

$conn = mysqli_connect(
    "sql205.thsite.top",
    "thsi_43030887",
    "c5!xTDne",
    "thsi_43030887_Indupr_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$id = $_GET['id'];

$sql = "DELETE FROM contact_messages WHERE id = $id";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location: admin.php");
    exit();
}else{
    echo "Delete Failed";
}

?>