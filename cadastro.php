
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/pags.css">
    <title>Cadastro</title>
</head>
<body>
<div class="cabecario">
    <h3 class="localizacao">Você está na pagina de Cadastro</h3>
    <h1 class="empresarial_h1">Empresarial</h1>
    <a href="index.php"><button class="btn_cabecario">Menu</button></a>
</div>
<form action="cadastro.php" method="post" style="top: 200px; left: 380px">

    <label for="nome" class="label">Nome:</label>
    <input id="nome" name="nome" type="text" style="position: relative; left: 60px"><br><br><br>

    <label for="usuario" class="label">Usuário:</label>
    <input id="usuario" name="usuario" type="text" style="position: relative; left: 47px"><br><br><br>

    <label for="senha" class="label">Senha:</label>
    <input id="senha" name="senha" type="text" style="position: relative; left: 55px"><br><br><br>

    <button id="concluir" name="concluir" type="submit" style="position: relative; top: 45px">
        <img src="img/accept.ico" class="imag_botao">
        Concluir
    </button>

    <button id="excluir" name="excluir" type="reset"  style="position: relative; top: 45px; left: 100px">
        <img src="img/delete.ico" class="imag_botao">
        Excluir
    </button>

</form>

      <img src="img/empresarial.png" style="position: fixed; top: 155px; right: 310px;
      width: 300px; height: 300px">

</body>
</html>


