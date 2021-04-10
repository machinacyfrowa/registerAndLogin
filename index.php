<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 offset-4">
                <h1 class="text-center mb-3">Zarejestruj się</h1>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="register">
                    <label class="form-label" for="emailInput">Adres e-mail:</label>
                    <input class="form-control mb-3" type="email" name="email" id="emailInput" required>
                    <label class="form-label" for="passwordInput">Hasło:</label>
                    <input class="form-control mb-3" type="password" name="password" id="passwordInput">
                    <button class="btn btn-primary w-100" type="submit">Załóż konto</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4 offset-4">
                <h1 class="text-center mb-3">Zaloguj się</h1>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="login">
                    <label class="form-label" for="emailInput">Adres e-mail:</label>
                    <input class="form-control mb-3" type="email" name="email" id="emailInput" required>
                    <label class="form-label" for="passwordInput">Hasło:</label>
                    <input class="form-control mb-3" type="password" name="password" id="passwordInput">
                    <button class="btn btn-primary w-100" type="submit">Zaloguj</button>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>