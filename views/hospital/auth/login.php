<?php
include __DIR__ . "/../../../app/application/core.php";
?>
<?php
$title = "Hospital | login";
include __DIR__ . "/../../_partials/head.php";
?>

<body class="vh-100 d-flex-col">
    <div class="w-100">
        <?php view('_partials.navbar'); ?>
    </div>
    <div class="form-container d-flex align-items-center h-100 w-100">
        <div class="login col-sm-10 col-md-8 col-lg-4 mx-auto">
            <div class="card py-4 px-5 mr-0">
                <h2 class="font-title mb-3">Hospital Login</h2>
                <?php if (isset($_SESSION['notification'])) { ?>
                    <div class="alert alert-warning mb-0" role="alert">
                        <?php
                        foreach ($_SESSION['notification'] as $msg) { ?>
                            <p class="m-0"><?= $msg ?></p>
                        <?php } ?>
                    </div>
                <?php
                    unset($_SESSION['notification']);
                } ?>
                <?php if (isset($_SESSION['errors']) && sizeof($_SESSION['errors']) > 0) { ?>
                    <div class="alert alert-danger mb-0" role="alert">
                        <?php
                        foreach ($_SESSION['errors'] as $error) { ?>
                            <p class="m-0"><?= $error ?></p>
                        <?php } ?>
                    </div>
                <?php
                    unset($_SESSION['errors']);
                } ?>
                <form action="/hospital/login" method="POST">
                    <div class="form-group my-4">
                        <input type="email" class="form-control" name="email_id" placeholder="Enter email" required>
                    </div>
                    <div class="form-group my-4">
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <button type="submit" class="btn btn-danger" name="login">Login</button>
                    </div>
                </form>
                <div class="text-center py-2">
                    <p>Not registered yet?<span class="px-2 font-ternary"><a href="/hospital/signup" class="font-ternary">Signup</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php view('_partials.footer'); ?>
    </div>
</body>

</html>