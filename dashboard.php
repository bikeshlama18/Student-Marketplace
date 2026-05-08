<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-5 text-center">

        <h1>
            Welcome,
            <?php echo $_SESSION['user_name']; ?>
        </h1>

        <p class="mt-3">
            You are successfully logged in.
        </p>

        <a href="logout.php"
           class="btn btn-danger mt-3">

            Logout

        </a>

    </div>

</div>

</body>
</html>