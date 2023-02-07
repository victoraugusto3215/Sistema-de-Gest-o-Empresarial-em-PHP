<html>

<head>
    <title>Vendas</title>
    <link rel="stylesheet" href="styles/pags.css">
</head>

<body>
<div class="cabecario">
    <h3 class="localizacao">Você está na pagina de Vendas</h3>
    <h1 class="empresarial_h1">Empresarial</h1>
    <a href="index.php"><button class="btn_cabecario">Menu</button></a>
</div>

<form action="vendas.php" method="post" style="top: 160px; left: 300px">

        <label for="nome">Nome:</label>
        <input id="nome" name="nome" type="text" style="position: relative; left: 150px"><br><br><br>

        <label for="valor">Valor:</label>
        <input id="valor" name="valor" type="text" style="position: relative; left: 156px"><br><br><br>

        <label for="data_venda">Data da venda:</label>
        <input id="data_venda" name="data_venda" type="date" style="position: relative; left: 89px; width: 150px"><br><br><br>

        <label for="codigo">Código:</label>
        <input id="codigo" name="" type="text" style="position: relative;left: 143px"><br><br><br>

        <label for="forma_pagam">Forma de pagamento:</label>
        <select type="text" name="Nome" style="position: relative; left: 40px; width: 150px">
            <option value="Crédito">Crédito</option>
            <option value="Débito">Débito</option>
            <option value="Pix">Pix</option>
            <option value="Dinheiro">Dinheiro</option>
        </select><br><br><br>

       <button  style="position: relative; left: 130px; top: 30px">
           <img class="imag_botao" src="img/add.ico">
           Concluir
       </button>
    </form>

    <img  src="img/empresarial.png" style="position: relative;
     top: 155px; left: 430px; width: 300px; height: 360px ">

</body>

</html>