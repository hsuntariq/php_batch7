<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>
    <title>Registration</title>
</head>
<body>
    <div class="container col-lg-8 m-auto">
        <h1 class="text-center display-1 text-info">
            Register Now
        </h1>
        <div class="row align-items-center">
            <div class="col-md-6">
                <form action="./register-user.php" method="POST">
                    <h3 class="display-2">
                        Get Started
                    </h3>
                    <label for="">Username</label>
                    <input class="form-control" type="text" placeholder="Enter your username" name="username" id="">
                    <label for="">Email</label>
                    <input class="form-control" type="text" placeholder="Enter your email" name="email" id="">
                    <label for="">Address</label>
                    <input class="form-control" type="text" placeholder="Enter your address" name="address" id="">
                    <label for="">Phone</label>
                    <input class="form-control" type="text" placeholder="Enter your phone" name="phone" id="">
                    <label for="">Password</label>
                    <input class="form-control" type="password" placeholder="Enter your password" name="password" id="">
                    <button class="w-100 my-2 btn btn-info">
                        Register
                    </button>
                </form>
            </div>
            <div class="col-md-6" style="">
                <img width="100%" src="https://thumbs.dreamstime.com/b/registration-form-cute-cartoon-man-sign-up-filling-all-fields-signing-cta-concept-clipboard-to-fill-flat-line-vector-224547212.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>