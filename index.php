<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" method="POST" action="cek_login.php">
        <div class="text-center mb-4">
            <img class="mb-4" src="assets/brand/scooter.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Penjualan Motor Bekas</h1>
        </div>

        <div class="form-label-group">
            <input type="text" class="form-control" for="id_user" name="id_user" placeholder="Masukkan User ID Anda" required autofocus>
            <label>ID</label>
        </div>

        <div class="form-label-group">
            <input type="password" for="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
            <label>Password</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" name="masuk" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; Penjualan Motor Bekas 2021</p>

    </form>
</body>

</html>