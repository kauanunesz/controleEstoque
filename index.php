<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
    <!-- Colocar required nos campos obrigatórios -->
  </head>
  <body>
    <form action="php/login.php" method="post">
        <h1>Login</h1>
        <input type="text" id="login" name="login" required placeholder="Login"/>
        <input type="password" id="senha" name="senha" required placeholder="Senha"/>
        <button type="submit">Entrar</button>
        <a href="pages/cadastro-usuario.html">Não tem cadastro? Cadastre-se</a>
    </form>
  </body>
</html>
