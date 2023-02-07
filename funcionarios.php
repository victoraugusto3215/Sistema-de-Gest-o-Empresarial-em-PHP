<html>

<head>
    <title>Funcionários</title>
    <link rel="stylesheet" href="styles/pags.css">
</head>

<body>
<div class="cabecario">
    <h3 class="localizacao">Você está na pagina de Funcionários</h3>
    <h1 class="empresarial_h1">Empresarial</h1>
    <a href="index.php"><button class="btn_cabecario">Menu</button></a>
</div>

<form action="funcionarios.php" method="post" style="top: 130px; left: 300px">

        <label for="nome">Nome:</label>
        <input id="nome" name="nome" type="text" style="position: relative; left: 162px"><br><br>

        <label for="cpf">CPF:</label>
        <input id="cpf" name="cpf" type="text" style="position: relative; left: 173px"><br><br>

        <label for="uf">UF:</label>
        <input id="uf" name="uf" type="text" style="position: relative; left: 183px"><br><br>

        <label for="data_nascim">Data de nascimento:</label>
        <input id="data_nascim" name="data_nascim" type="date" style="position: relative; left: 63px; width: 150px"><br><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" style="position: relative; left: 170px; width: 150px">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select><br><br>

        <label for="cidade">Cidade:</label>
        <input id="cidade" name="cidade" type="text" style="position: relative; left: 157px"><br><br>

        <label for="endereco">Endereço:</label>
        <input id="endereco" name="endereco" type="text" style="position: relative; left: 140px"><br><br>


        <label for="numero">Número:</label>
        <input id="numero" name="numero" type="text" style="position: relative; left: 153px"><br><br>

        <label for="email">Email:</label>
        <input id="email" name="email" type="text" style="position: relative; left: 170px"><br><br>

        <label for="telefone">Telefone:</label>
        <input id="telefone" name="telefone" type="text" style="position: relative; left: 150px"><br><br>

        <label for="setor">Setor:</label>
        <input id="setor" name="setor" type="text" style="position: relative; left: 173px"><br><br>

        <button type="submit">
            <img class="imag_botao" src="img/add.ico">
            Novo
        </button>

        <button>
            <img class="imag_botao" src="img/search.ico">
            Buscar
        </button>

        <button>
            <img class="imag_botao" src="img/accept.ico">
            Alterar
        </button>

        <button>
            <img class="imag_botao" src="img/delete.ico">
            Excluir
        </button>

        <button>
            <img class="imag_botao" src="img/back.ico">
            Voltar
        </button>
</form>

    <img  src="img/empresarial.png" style=" position: relative;
     width: 390px; height: 468px; top: 125px; left: 400px;">

</body>

</html>