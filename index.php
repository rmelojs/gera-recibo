<!doctype html>
<html lang="pt-BR">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Recibo Online</title>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index.css">
  </head>
  <body >
    <div class="titlePage">
        <h2>Recibo Online</h2>
    </div>
    
    <div class="container">

      <form action="print-rec.php" method="POST">
          <h3>Preencha os dados do Recibo</h3>
            <hr>
          <div class="field">
            <label for="name_pag">Nome: </label><br>
              <input type="text" class="form-control col-md-8" name="name_pag" id="name_pag" value="________________________________" placeholder="" autofocus="autofocus"><br>
          </div>

          <div class="field">
            <label for="amount">Valor: </label><br>
              <input type="text" class="form-control col-md-3" name="amount" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="amount" placeholder="" maxlength="9"><br>
          </div>

          <div class="field">
            <label for="value_inwords">Valor por extenso: </label><br>
              <input type="text" class="form-control col-md-8" name="value_inwords" value="___________________________________" id="value_inwords" placeholder=""> <br>
          </div>

          <div class="field">
            <label for="referent">Referente a:</label><br>
              <input type="text" class="form-control col-md-8" name="referent" value="_____________________________" id="referent" placeholder=""> <br>
          </div>

          <div class="field">
            <label for="serv_jur">Serviços prestados:</label><br>
              <input type="text" class="form-control col-md-8" name="serv_jur" value="______________ ____________________________________" id="serv_jur" placeholder=""> <br>
          </div>

          <div class="field">
            <label for="cidade">Cidade:</label><br>
              <input type="text" class="form-control col-md-8" name="cidade" value="___________________" id="cidade" placeholder=""><br>
          </div>

          <label for="date">Data:</label><br>
              <input type="text" class="form-control col-md-2" name="date" id="date" value="__ de _________ de ____" placeholder="dd/mm/aaaa" maxlength="25">
              <small id="helpId"classtext-nuted>Você pode digitar a data por extenso</small>
          <br>

          <hr class="hr-bottom">

          <input class="btn btn-success" type="submit" role="button" value="GERAR RECIBO">
          </form>
    </div>                

    <div class="footerhome">
          <hr class="homeForm">
          <div class="footerPageText">
            <center>
              <a href="https://www.carlosferreira.adv.br">www.carlosferreira.adv.br</a> <br> <a href="https://www.carlosferreira.adv.br/app/geranota">Emitir notas promissórias</a>
            </center>
          </div>  
    </div>
  </body>
</html>