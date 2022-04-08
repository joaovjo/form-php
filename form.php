<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário PHP</title>
</head>

<body>

    <form action="proc.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" />
            <?php
            if (isset($_GET['erro']) && $_GET['erro'] == "nome") {
                echo "<span style='color:red'>Insira seu nome!</span>";
            }
            ?>
        </div>
        <br>

        <div>
            <label for="sexo">Sexo: </label>
            <input type="radio" id="sexo" name="sexo" value="F" /> Feminino
            <input type="radio" id="sexo" name="sexo" value="M" /> Masculino

            <?php
            if (isset($_GET['erro']) && $_GET['erro'] == "sexo") {
                echo "<span style='color:red'>Insira seu sexo!</span>";
            }
            ?>
        </div>

        <br>

        <div>
            <b><label for="email">Email:</label></b>

            <input type="email" id="email" name="email">

            <?php
            if (isset($_GET['erro']) && $_GET['erro'] == "email") {
                echo "<span style='color:red'>Insira seu email!</span>";
            }
            ?>
        </div>

        <div>
            <label for="senha">Senha: </label>

            <input type="password" id="senha" name="senha" />

            <?php
            if (isset($_GET['erro']) && $_GET['erro'] == "senha") {
                echo "<span style='color:red'>Insira sua senha!</span>";
            }
            ?>

        </div>

        <br>

        <div>
            <b><label for="confirma">Confirme sua senha:</label></b>
            <input type="password" id="confirma" name="confirma"/>

            <?php
                if(isset($_GET ['erro']) && $_GET ['erro'] == "confirma")
                {
                    echo "<span style='color:red'>Use senhas iguais!</span>";
                }
            ?>
        </div>

        <br>

        <div>
            <label>Arquivo: </label><br><br>
            <input type="file" name="arq">
        </div>
        <br>
        <input type="submit" value="Cadastro" />

    </form>

</body>

</html>