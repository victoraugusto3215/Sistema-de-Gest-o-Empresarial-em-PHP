<html>

<head>
    <title>Financeiro</title>
    <link rel="stylesheet" href="styles/pags.css">
</head>

<body>
<div class="cabecario">
    <h3 class="localizacao">Você está na pagina de Financeiro</h3>
    <h1 class="empresarial_h1">Empresarial</h1>
    <a href="index.php"><button class="btn_cabecario">Menu</button></a>
</div>

<form action="financeiro.php" method="post" style="top: 160px; left: 300px">

        <label for="categoria">Categoria:</label>
        <input id="categoria" name="categoria" type="text" style="position: relative; left: 132px"><br><br><br>

        <label for="titular">Titular:</label>
        <input id="titular" name="titular" type="text" style="position: relative; left: 159px"><br><br><br>

        <label for="data_emiss">Data de Emissão:</label>
        <input id="data_emiss" name="data_emiss" type="date" style="position: relative; left: 80px; width: 150px"><br><br><br>

         <label for="data_venci">Data de Vencimento:</label>
         <input id="data_venci" name="data_venci" type="date" style="position: relative; left: 57px; width: 150px"><br><br><br>


        <label for="valor">Valor:</label>
        <input id="valor" name="valor" type="text" style="position: relative; left: 167px"><br><br><br>

        <button style="position: relative; left: 130px; top: 30px">
            <img class="imag_botao" src="img/search.ico">
            Consultar
        </button>

    </form>

    <img  src="img/empresarial.png" style="position: relative;
    top: 155px; left: 430px; width: 300px; height: 360px ">


</body>

</html>