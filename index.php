<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stoke</title>
</head>
<body>
    <header>
        <h1 class="titulo"><a href="index.php">Stoke</a></h1>
    </header>
    <main>
        <section class="sec-login">
            <div class="titulo-login">
                <h2>Entrar</h2>
            </div>
            <div class="form-login">
                <form action="index.php" method="post">
                    <fieldset>
                        <label for="username">Usuário</label>
                        <input type="text" name="username" id="username">
                    </fieldset>
                    <fieldset>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha">
                    </fieldset>
                    <fieldset>
                        <input type="submit" value="Entrar">
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
</body>
</html>