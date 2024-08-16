<?php
$session = session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('static/admin/'); ?>dist/css/adminlte.min.css">

    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Login</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?= $session->getFlashdata('message');?>
                <form method="post" id="login">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <label id="email-error" class="error" style="display:none;" for="email">Please enter email
                        id</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <label id="password-error" class="error" style="display:none;" for="password">Please enter
                        Password</label>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" onclick="login_check()"
                                class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <!-- /.social-auth-links -->


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('static/admin/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('static/admin/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('static/admin/'); ?>dist/js/adminlte.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


    <script>
    function login_check() {
        $('#login').validate({
            rules: {

                email: {
                    required: true
                },
                password: {
                    required: true
                }

            },
            messages: {

                email: {
                    required: 'Please enter email id'
                },
                password: {
                    required: 'Please enter Password'
                }

            }
        });

    }
    </script>
</body>

</html>