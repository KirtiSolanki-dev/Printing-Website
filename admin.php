<?php



session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "indupr");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM contact_messages";

$result = mysqli_query($conn, $sql);


$conn = mysqli_connect("localhost", "root", "", "indupr");

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM contact_messages";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">

</head>
<body>

<div class="admin-navbar">

    <div class="logo">
        <img src="assets/logo.png" alt="Indu Printers Logo"> <span> Admin </span>
    </div>

    <div style="display:flex; align-items:center; gap:15px;">

        <div class="admin-profile">

            <div class="admin-avatar">
                A
            </div>

            <div class="admin-info">
                <h4><?php echo $_SESSION['admin']; ?></h4>
                <p>Logged In</p>
            </div>

        </div>

        <a class="logout-btn" href="logout.php">
            Logout
        </a>

    </div>

</div>

<div class="page-title">
    <h1>Contact Messages</h1>
    <p>Manage customer enquiries and printing requests</p>
</div>

<div class="table-wrapper">

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Service</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['service']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['created_at']; ?></td>

        <td>
            <a class="delete-btn"
        href="delete.php?id=<?php echo $row['id']; ?>"
        onclick="return confirm('Are you sure you want to delete this message?')">
        Delete
           </a>
        </td>
    </tr>

    <?php
    }
    ?>

    </tbody>

</table>

</div>



</body>
</html>