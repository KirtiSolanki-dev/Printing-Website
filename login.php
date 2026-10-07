<?php

session_start();

if(isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "admin123"){

        $_SESSION['admin'] = $username;

        header("Location: admin.php");
        exit();

    }else{
        $error = "Invalid Username or Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;

    background:
    linear-gradient(
        135deg,
        #071c2f 0%,
        #111827 40%,
        #1f2937 100%
    );
}

.login-card{

    width:400px;

    background:rgba(255,255,255,.12);

    backdrop-filter:blur(15px);

    border-radius:20px;

    padding:40px;

    color:white;

    box-shadow:0 15px 40px rgba(0,0,0,.25);
}

.login-card h1{
    text-align:center;
    margin-bottom:30px;
}

.input-group{
    margin-bottom:20px;
}

.input-group input{

    width:100%;

    padding:14px;

    border:none;

    border-radius:10px;

    outline:none;
}

button{

    width:100%;

    padding:14px;

    border:none;

    border-radius:10px;

    cursor:pointer;

    font-size:16px;

    font-weight:600;

    background:linear-gradient(
        135deg,
        #00cfff,
        #ff00aa
    );

    color:white;
}

.error{
    color:#ffcccc;
    text-align:center;
    margin-bottom:15px;
}

</style>

</head>
<body>

<div class="login-card">

    <h1>Indupr Admin Login</h1>

    <?php if($error != ""){ ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST">

        <div class="input-group">
            <input
                type="text"
                name="username"
                placeholder="Username"
                required
            >
        </div>

        <div class="input-group">
            <input
                type="password"
                name="password"
                placeholder="Password"
                required
            >
        </div>

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>