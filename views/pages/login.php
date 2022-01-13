<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/styles/style.css" />
    <title>Sign in</title>
</head>
<body>
<div class="container">
    <div class="container form-wrapper">
        <h1 class="form-heading">Login</h1>
        <form action="auth.php" accept-charset="UTF-8" method="post">
            <label for="login_input" class="mt-3">Username</label>
            <input
                type="text"
                class="form-control mt-1"
                id="login_input"
                name="login"
                required
            />
            <label for="password_input" class="mt-3">Password</label>
            <input
                type="text"
                class="form-control mt-1"
                id="password_input"
                name="password"
                required
            />
            <button class="btn btn-success mt-3" type="submit">Sign in</button>
            <p class="mt-3 form-link">
                If you don't have an account - <a href="#">Sign up!</a>
            </p>
        </form>
    </div>
</div>
</body>
</html>
