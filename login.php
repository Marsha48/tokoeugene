<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link href='style.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <form action="validasi.php" method="POST">

        <div class="login">
            <div class="login-header">
                <h1>Login kuy!</h1>
            </div>
            <div class="login-form">
                <h3>Username:</h3>
                <input type="text" placeholder="Username" name="username" /><br>
                <h3>Password:</h3>
                <input type="password" placeholder="Password" name="password" />
                <br>
                <input type="submit" value="Login" class="login-button" />
                <br>
            </div>
        </div>
    </form>
    <script>
        $('.error-page').hide(0);

        $('.login-button , .no-access').click(function() {
            $('.login').slideUp(500);
            $('.error-page').slideDown(1000);
        });

        $('.try-again').click(function() {
            $('.error-page').hide(0);
            $('.login').slideDown(1000);
        });
    </script>
</body>

</html>