<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wiro Sableng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">FruitShop</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="status.php">Status</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="testimonial.php">Testimonials</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="voting.php">Fruit Voting</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="almanac.php">Fruit Almanac</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </nav>

    <div class="container text-center" style="margin-top:20px">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="action_login.php" method="post">
                    <img class="rounded-circle w-50 mx-auto d-block" src="images/wiro.jpg">
                    <h1 class="h3 mb-3 font-weight-normal">Please enter your credential</h1>
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" name="password" class="form-control" style="margin-top:10px"
                        placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="remember" value="remember-me" style="margin-top:10px"> Remember
                            me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    <span>Do not have account? <a href="register.php">Register here.</a></span>
                    <input type="hidden" name="action" value="login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>