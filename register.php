<?php

include 'database.php';

if(isset($_POST['register'])){

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(full_name, email, password)
            VALUES('$full_name', '$email', '$hashed_password')";

    if(mysqli_query($conn, $sql)){
        echo "Registration Successful";
    } else {
        echo "Error";
    }

}

?>
<!DOCTYPE html>
<html>
<head>

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    Register
                </h2>

                <form action="" method="POST">

                    <input type="text"
                           name="full_name"
                           class="form-control mb-3"
                           placeholder="Full Name"
                           required>

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
                            name="register"
                            class="btn btn-dark w-100">

                        Register

                    </button>

                </form>

                <div class="text-center mt-3">

                    <a href="login.php">
                        Already have an account?
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>