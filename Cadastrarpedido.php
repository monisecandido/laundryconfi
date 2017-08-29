<!DOCTYPE HTML>
<html>

<head>
  <title>Cadastrar Pedido</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!-- MENU -->

<body>

  <?php 
    
    if (!array_key_exists("item", $_GET)) {
      $item = '0';
    }else{
      $item = $_GET["item"];
    }
      
  ?>
  <header>
    <nav class="logo">
      <strong class="estilofonte">Laundry</strong><br>
      <strong class="estilofonte">Confi</strong>
      <div class="menu">
        <ul>
          <li><a href="index.html">Página Inicial</a></li>
          <li><a href="servicos.html">Serviços</a></li>
          <li><a href="istitucional.html">Quem somos</a></li>
          <li><a href="CadastrarUsuario.html">Cadastre-se Aqui</a></li>
          <li><a class="quem-somos" href="Cadastrarpedido.html">Faça um pedido</a></li>
          <li><a href="fale_conosco.html">Contato</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="Faq.html">FAQ</a></li>
        </ul>
      </div>
    </nav>
  </header><br><br>

  <!-- Formulario -->
  <form action="conexao.php" method="post" name="dados">
    <div class="form-style-6">
      <center>
        <h1>Preencha o Formulário abaixo para fazer o Pedido</h1>
      </center>

      <!-- ENDEREÇO -->
      Rua: <input type="text" name="rua" minlength="3" placeholder="Rua" pattern="[a-z A-Z/s]+$" required> Número:
      <input type="text" name="numero" size="4" placeholder="Número" pattern="[0-9]+$" required="required"> Bairro:
      <input
        type="text" name="bairro" placeholder="Bairro" pattern="[a-z A-Z/s]+$" required> Estado: <select name="estado" required="required"> 
     <option>----------------</option>
     <option value="ac">Acre</option> 
     <option value="al">Alagoas</option> 
     <option value="am">Amazonas</option> 
     <option value="ap">Amapá</option> 
     <option value="ba">Bahia</option> 
     <option value="ce">Ceará</option> 
     <option value="df">Distrito Federal</option> 
     <option value="es">Espírito Santo</option> 
     <option value="go">Goiás</option> 
     <option value="ma">Maranhão</option> 
     <option value="mt">Mato Grosso</option> 
     <option value="ms">Mato Grosso do Sul</option> 
     <option value="mg">Minas Gerais</option> 
     <option value="pa">Pará</option> 
     <option value="pb">Paraíba</option> 
     <option value="pr">Paraná</option> 
     <option value="pe">Pernambuco</option> 
     <option value="pi">Piauí</option> 
     <option value="rj">Rio de Janeiro</option> 
     <option value="rn">Rio Grande do Norte</option> 
     <option value="ro">Rondônia</option> 
     <option value="rs">Rio Grande do Sul</option> 
     <option value="rr">Roraima</option> 
     <option value="sc">Santa Catarina</option> 
     <option value="se">Sergipe</option> 
     <option value="sp">São Paulo</option> 
     <option value="to">Tocantins</option> 
     </select> 
     Cidade: <input type="text" name="cidade" placeholder="Cidade" pattern="[a-z A-Z/s]+$" required> CEP: <input
          type="text" name="cep" placeholder="CEP" size="5" maxlength="9" pattern="[0-9]{5}-[0-9]{3}" required="required" /> Tipo de Lavagem:
        <select name="Tipo de Serviço" required="required">
     <option>-----------------</option> 
     <option <?=($item == '1')? 'selected': '' ?> value="Lavangem a Seco">Lavagem a Seco</option>
     <option <?=($item == '2')? 'selected': '' ?> value="Baby Clean">Baby Clean</option>
     <option <?=($item == '3')? 'selected': '' ?> value="Wet Clean">Wet Clean</option>  
     <option <?=($item == '4')? 'selected': '' ?> value="Peças">Peças Intimas</option>
     </select> 
     Quantidade de Peças: <input type="munber" name="QuantidadePeças" placeholder="Quantidade de Peças"
          size="5" maxlength="3" pattern="[0-9]+$" required="required"><br><br>

        <input type="submit" value="Enviar dados" /><br><br>
        <center><input name="Reset" type="reset" value="Limpar"></center>
  </form>
  </div>

  <!--Rodape-->
  <footer class="rodape" style="margin-top: 5em;">
    <div class="div-rodape">
      <ul>
        <li> <a href="https://www.facebook.com/"><img class="imagem-rodape" src="img/facebook.png"></a></li>
        <li> <a href="https://www.instagram.com/?hl=pt-br"><img class="imagem-rodape" src="img/instagran.png"></a></li>
        <li> <a href="https://twitter.com/login?lang=pt"><img class="imagem-rodape" src="img/twitter.png"></a></li>
      </ul>
    </div>
  </footer>

</body>

</html>