<?php

$conn = mysqli_connect("localhost", "root", "", "indupr");

if(!$conn){
    die("Connection Failed");
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