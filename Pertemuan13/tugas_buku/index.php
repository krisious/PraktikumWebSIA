<?php
session_start();

if (isset($_SESSION["username"])) {
    header('location: home.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col img-section">
                <h1>Welcome to Digebook</h1>
            </div>
            <div class="col login-section">
                <h2>Login</h2>

                <div style="color: red; margin: 3rem 0;">
                    <?php
                    if (isset($_COOKIE['message'])) {
                        echo "<p class='text-center fw-semibold'>" . $_COOKIE['message'] . "</p?";
                    }
                    ?>
                </div>

                <form method="POST" action="login.php">
                    <div class="mb-3" style="padding: 0 2rem; padding-top: 2rem">
                        <label for="username" class="form-label fw-semibold" placeholder="Username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="usernameHelp">
                    </div>
                    <div class="mb-3" style="padding: 0 2rem;">
                        <label for="password" class="form-label fw-semibold" placeholder="Password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top: 3rem; padding-bottom: 2rem">
                        <button type="submit" name="login" class="btn btn-primary me-4">Submit</button>
                        <button type="reset" name="cancel" class="btn btn-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>