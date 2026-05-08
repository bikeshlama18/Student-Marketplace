<?php

session_start();

include 'database.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password, $user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];

            header("Location: dashboard.php");

        } else {
            echo "Wrong Password";
        }

    } else {
        echo "User Not Found";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Student Marketplace
                </h2>

                <form action="" method="POST">

                    <input type="email"
                           name="email"
                           class="form-control mb-3"
                           placeholder="Email"
                           required>

                    <input type="password"
                           name="password"
                           class="form-control mb-3"
                           placeholder="Password"
                           required>

                    <button type="submit"
                            name="login"
                            class="btn btn-dark w-100">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>