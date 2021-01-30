<?php require_once 'controllers/authController.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <!-- <div class="background_image" style="background-image:url(images/eclinic2.jpeg)"></div> -->

    <!-- Header -->

    
        <!-- <a href="#"><img src="images/eClinic.png" alt="" style="width:55px;height:45px; margin-left:30px; margin-top:7px;"></img></a> -->

    <div class="container">
        <div class="row">
        
            <div class="col-md-4 offset-md-4 form-div login">
            <a href="#"><img src="images/eClinic.png" alt="" style="width:55px;height:45px; margin-left:30px; margin-top:7px;"></img></a><sup style="color:#1b7fbd; position: relative; font-size: 22px; font-weight: 700; line-height:0.15; vertical-align: text-top;">PORTAL</sup>
                <form action="login.php" method="post">
                    <h3 class="text-center">Login</h3>

                    <?php if (count($errors) > 0) : ?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $error) : ?>
                                <li>
                                    <?php echo $error; ?>
                                </li>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <div class="d-grid gap-2 btnstyle">
                            <button class="btn btn-primary btn-lg" type="submit" name="login-btn">Login</button>
                        </div>
                    </div>
                    <p class="text-center">Not yet a Member? <a href="signup.php">Sign Up</a></p>
                    <div style="font-size:0.8em; text-align:center;">
                        <a href="forgot_password.php">Forgot your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>