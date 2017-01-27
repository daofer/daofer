<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Modelo-vista-controlador</title>
</head>
<body>
    <h1>LOGIN</h1>
    <section>
        <form action="controlador/control.php" method="post" class="login">
                <div><label>Username</label><input name="usuario" type="text"  required="true"></div>
                <div><label>Password</label><input name="clave" type="password" required="true"></div>
                <div><input name="login" type="submit" value="login"></div>
            </form>
    </section>
</body>
</html>