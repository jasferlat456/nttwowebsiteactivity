<!doctype html>
<html lang="en">

<head>
    <?php
        $pageTitle = "Landing Page";
        include 'phpfiles/header.php';
    ?>
</head>

<body class="index" id="Top-page">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <?php include 'phpfiles/navbar.php'; ?>
    </nav>

    <section class="banner">
        <?php include 'phpfiles/banner.php'; ?>
    </section>

    <?php include 'phpfiles/packages.php'; ?>

    <?php include 'phpfiles/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>