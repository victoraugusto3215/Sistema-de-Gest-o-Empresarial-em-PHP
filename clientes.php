<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="styles/pags.css">
</head>
<body>

<div class="cabecario">
    <h3 class="localizacao">Você está na pagina de Clientes</h3>
    <h1 class="empresarial_h1">Empresarial</h1>
    <a href="index.php"><button class="btn_cabecario">Menu</button></a>
</div>
<form action="clientes.php" method="post" style="top: 130px; left: 300px">

    <label for="nome" class="label">Nome:</label>
    <input id="nome" name="nome" type="text" style="position: relative; left: 170px"><br><br>

    <label for="data_nascim" class="label">Data de nascimento:</label>
    <input id="data_nascim" name="data_nascim" type="datetime-local" style="position: relative; left: 72px; width: 150px"><br><br>

    <label for="endereco" class="label">Endereço:</label>
    <input id="endereco" name="endereco" type="text" style="position: relative; left: 145px"><br><br>

    <label for="telefone" class="label">Telefone:</label>
    <input id="telefone" name="telefone" type="text" style="position: relative; left: 153px"><br><br>

    <label for="cpf" class="label">CPF:</label>
    <input id="cpf" name="cpf" type="text" style="position: relative; left: 182px"><br><br>

    <label for="sexo" class="label">Sexo</label>
    <select id="sexo" name="sexo" style="position: relative; left: 183px; width: 150px ">
        <option value="masculino">M</option>
        <option value="feminino">F</option>
        <option value="outro">O</option>
    </select><br><br>

    <label for="numero" class="label">Número:</label>
    <input id="numero" name="numero" type="number" step="any" style="position: relative; left: 157px"><br><br>

    <label for="uf" class="label">UF:</label>
    <input id="uf" name="uf" type="text" style="position: relative; left: 192px"><br><br>

    <label for="cidade" class="label">Cidade:</label>
    <input id="cidade" name="cidade" type="text" style="position: relative; left: 164px"><br><br>

    <label for="email" class="label">Email:</label>
    <input id="email" name="email" type="email" style="position: relative; left: 175px"><br><br>

    <button id="salvar" name="salvar">
        <img  src="img/accept.ico" class="imag_botao">
        Salvar
    </button>
    
    <button id="excluir" name="excluir" style="position:relative; left: 220px">
        <img src="img/delete.ico" class="imag_botao">
        Excluir
    </button>


</form>

    <img src="img/empresarial.png" style="position: relative;
    top: 130px; left: 400px; width: 372px; height: 434px ">

</body>
</html>
