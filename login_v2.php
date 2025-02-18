<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
    body {
        background: linear-gradient(135deg, #667eea, #764ba2);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-page {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
    }

    .login-page h1 {
        font-size: 24px;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 20px;
    }

    .btn-info {
        width: 100%;
        border-radius: 20px;
        background: #667eea;
        border: none;
        transition: 0.3s;
    }

    .btn-info:hover {
        background: #5a67d8;
    }
    </style>
</head>

<body>

    <div class="login-page">
        <h1>Bienvenidos</h1>
        <p>Sign in Para iniciar sesión</p>

        <?php echo display_msg($msg); ?>

        <form method="post" action="auth_v2.php">
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="Ingrese su usuario" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Ingrese su Contraseña"
                    required>
            </div>

            <button type="submit" class="btn btn-info">Login</button>
        </form>
    </div>

</body>

</html>