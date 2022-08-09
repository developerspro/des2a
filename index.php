<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "bootstrap.php" ?>
    <title>Pagina de Login </title>
</head>

<body>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="principal.php" method="POST">
                <div class="mb-3">
                    <label for="form-usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" placeholder="digite seu usuario">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="senha">
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>

</body>

</html>