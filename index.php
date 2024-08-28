<?php

include_once "./computacao/chkLogin.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Index</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div id="container">
        <nav class="menu">
            <ul>
                <a href="index.php">
                    <li>Index</li>
                </a>
                <a href="logs.php">
                    <li>logs</li>
                </a>
            </ul>
        </nav>
        <div id="dados">
            <table>
                <thead>
                    <tr>
                        <td>Usuário</td>
                        <td>Senha</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>T - Usuário</td>
                        <td>T - Senha</td>
                        <td>
                            <button>E</button>
                            <button>A</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="acoes">
            <form action="" method="post">
                <label for="id">Id:</label>
                <input type="number" name="id">
                <label for="email">Email:</label>
                <input type="email" name="email">
                <label for="senha">Senha:</label>
                <input type="password" name="email">
                <div>
                    <input type="submit" name="alterar" value="Salvar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>