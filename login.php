<?php
$errors = [];
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["name"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username === "") {
        $errors["name"] = "Username is required.";
    }

    if (trim($password) === "") {
        $errors["password"] = "Password is required.";
    }

    if (empty($errors)) {

        if ($username === "Jasfer" && $password === "Jasfer123") {
            header("Location: index.php");
            exit;
        } else {
            $loginError = "Invalid username or password.";
        }

    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php
        $pageTitle = "Login";
        include 'phpfiles/header.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js"></script>
</head>

<body class="Login-regis">

    <?php include 'phpfiles/login-form.php'; ?>

    <?php include 'phpfiles/login-script.php'; ?>

</body>
</html>