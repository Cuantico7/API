<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Estoy en Login</h1>
    <form name="autenticar" action="index.php" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingrese el Email">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese el Password">

        </div>
        <input type="submit" value="Login">
        <input type="hidden" name="action" value="autenticar">
    </form>
</body>

</html>