<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/jpeg" href="img/imagenlogo.jpeg">
</head>
<body>
    <div class="login-box">
        <img class="avatar" src="img/logo.jpeg" alt="Logo Veterinaria">
        <h1>Login Here</h1>
        <form action="validar.php" method="post">
            <!--USERNAME-->
            <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name='usuario'>

            <!--PASSWORD-->
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name='contrasena'>

            <input type="submit" value="Log In">
            <p>Veterinarias S.A.S</p>
        </form>
    </div>
</body>
</html>