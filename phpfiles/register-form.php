<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">

    <div class="register-login-container">

        <h1 class="register-login-title montserrat-uniquifier">
            CREATE ACCOUNT
        </h1>

        <?php if (!empty($success)): ?>
            <div class="php-success">
                <?= htmlspecialchars($success) ?>
            </div>
        <?php endif; ?>

        <form id="myForm" method="POST" action="register.php" novalidate>

            <div>
                <input type="text"
                       id="name"
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
                <input type="email"
                       id="email"
                       name="email"
                       class="form-control lora-uniquifier"
                       placeholder="Email Address"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">

                <?php if (isset($errors["email"])): ?>
                    <label class="php-error">
                        <?= htmlspecialchars($errors["email"]) ?>
                    </label>
                <?php endif; ?>
            </div>

            <div>
                <input type="tel"
                       id="phone"
                       name="phone"
                       class="form-control lora-uniquifier"
                       placeholder="Phone Number"
                       value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">

                <?php if (isset($errors["phone"])): ?>
                    <label class="php-error">
                        <?= htmlspecialchars($errors["phone"]) ?>
                    </label>
                <?php endif; ?>
            </div>

            <div>
                <input type="password"
                       id="password"
                       name="password"
                       class="form-control lora-uniquifier"
                       placeholder="Password">

                <?php if (isset($errors["password"])): ?>
                    <label class="php-error">
                        <?= htmlspecialchars($errors["password"]) ?>
                    </label>
                <?php endif; ?>
            </div>

            <div>
                <input type="password"
                       id="confirmPassword"
                       name="confirmPassword"
                       class="form-control lora-uniquifier"
                       placeholder="Confirm Password">

                <?php if (isset($errors["confirmPassword"])): ?>
                    <label class="php-error">
                        <?= htmlspecialchars($errors["confirmPassword"]) ?>
                    </label>
                <?php endif; ?>
            </div>

            <button type="submit"
                    class="btn btn-light lora-uniquifier register-login-btn">
                Register
            </button>

        </form>

        <div class="login-text lora-uniquifier">
            Already have an account?
            <div>
                <a href="login.php">Login Here</a>
            </div>
        </div>

    </div>

</div>