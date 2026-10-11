<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">

    <div class="register-login-container">

        <h1 class="register-login-title montserrat-uniquifier">
            Studio 101 <i class="bi bi-camera2"></i>
        </h1>

        <?php if (isset($loginError) && $loginError !== ""): ?>
            <p class="php-error">
                <?= htmlspecialchars($loginError) ?>
            </p>
        <?php endif; ?>

        <form id="loginForm" method="POST" action="login.php" novalidate>

            <div>
                <input type="text"
                       name="name"
                       class="form-control lora-uniquifier"
                       placeholder="Username"
                       value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">

                <?php if (isset($errors["name"])): ?>
                    <label class="php-error">
                        <?= htmlspecialchars($errors["name"]) ?>
                    </label>
                <?php endif; ?>
            </div>

            <div>
                <input type="password"
                       name="password"
                       class="form-control lora-uniquifier"
                       placeholder="Password">

                <?php if (isset($errors["password"])): ?>
                    <label class="php-error">
                        <?= htmlspecialchars($errors["password"]) ?>
                    </label>
                <?php endif; ?>
            </div>

            <div id="loginError"></div>

            <button type="submit"
                    class="btn btn-light lora-uniquifier register-login-btn">
                Login
            </button>

        </form>

        <div class="login-text lora-uniquifier">
            Create an account
            <a href="register.php">Register Here</a>
        </div>

    </div>

</div>