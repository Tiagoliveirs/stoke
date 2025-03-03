<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stoker</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1><a class="link-titulo" href="index.php">Stoker</a></h1>
    </header>
    <main>
        <section class="s-form">
            <div class="box-titulo">
                <h2>Login</h2>
            </div>
            <div class="box-content">
                <form action="login.php" name="form-login" class="form-login" method="post">
                    <fieldset>
                        <label for="user">Usuário</label>
                        <input type="text" name="c-user" id="user" placeholder="Nome de usuário">
                    </fieldset>
                    <fieldset>
                        <label for="senha">Senha</label>
                        <input type="password" name="c-senha" id="senha" placeholder="senha">
                    </fieldset>
                    <fieldset>
                        <input type="checkbox" name="c-chk" id="chk">
                        <label for="chk">Mantenha conectado</label>
                        <a href="senha.php">Recuperar senha</a>
                    </fieldset>
                    <fieldset>
                        <input type="submit" name="btn-entrar" id="entrar" value="Entrar">
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&COPY;2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>