<?php
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirmPassword"] ?? "";

    if ($username === "") {
        $errors["name"] = "Username is required.";
    } elseif (strlen($username) < 5 || strlen($username) > 10) {
        $errors["name"] = "Username must be 5 to 10 characters.";
    } elseif (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
        $errors["name"] = "Username can only contain letters, numbers, and underscores.";
    }

    if ($email === "") {
        $errors["email"] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Enter a valid email address.";
    }

    if ($phone === "") {
        $errors["phone"] = "Phone number is required.";
    } elseif (!preg_match("/^[0-9]{11}$/", $phone)) {
        $errors["phone"] = "Phone number must contain exactly 11 digits.";
    }

    if ($password === "") {
        $errors["password"] = "Password is required.";
    } elseif (strlen($password) < 8 || strlen($password) > 15) {
        $errors["password"] = "Password must be 8 to 15 characters.";
    }

    if ($confirmPassword === "") {
        $errors["confirmPassword"] = "Please confirm your password.";
    } elseif ($password !== $confirmPassword) {
        $errors["confirmPassword"] = "Passwords do not match.";
    }

    if (empty($errors)) {
        $success = "All fields passed validation!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php
        $pageTitle = "Register";
        include 'phpfiles/header.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js"
            integrity="sha512-qu7dMuIm2f0KcKZ3BOoP4c+Hn+r4E8PbD2Ro4rmKsOyheCxcwhzQpf6SojA76dn+owqfANzfTFUTkGA+HpHjOA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
</head>

<body class="Login-regis">

    <?php include 'phpfiles/register-form.php'; ?>

    <!-- Comment this if requires the php validation  -->
    <!-- <?php  include 'phpfiles/register-script.php'; ?> -->

</body>

</html>