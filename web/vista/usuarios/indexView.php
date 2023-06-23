<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>

<body>
    <h3>Listado de usuarios</h3>

    <table border=1>
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Password</th>
            <th>Estado</th>
        </thead>
        <tbody>
            <?php


            foreach ($d->data as $usuario) {
                print_r("<tr>");
                print_r("<td>$usuario->id</td>");
                print_r("<td>$usuario->nombre</td>");
                print_r("<td>$usuario->email</td>");
                print_r("<td>$usuario->password</td>");
                print_r("<td>$usuario->estado</td>");
                print_r("</tr>");
            }

            ?>
        </tbody>
    </table>
</body>

</html>