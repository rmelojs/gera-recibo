<!doctype html>
<html lang="pt-BR">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Recibo Online</title>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="titlePage">
        <h2>Recibo Online</h2>
    </div>
    
    <div class="container-fluid">
        <!-- <div class="col">
          <hr class="formTop">
          <div class="row rec">
              <div class="col"> -->
                  <div class="form-group">
                    <form action="print-rec.php" method="POST">
                      <div class="alert alert-primary teste" role="alert">
                        <h3>Preencha os dados do Recibo</h3>
                          <hr>
                        <label for="name_pag">Nome: </label>
                            <input type="text" class="form-control col-md-4" name="name_pag" id="name_pag" value="________________________________" placeholder="" autofocus="autofocus">
                            <!-- <small id="helpId" class="text-muted">Digite seu nome:</small> --> <br>
                        <label for="amount">Valor: </label>
                            <input type="text" class="form-control col-md-2" name="amount" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" id="amount" placeholder="" maxlength="9">
                            <!-- <small id="helpId" class="form-text text-muted">Digite o valor</small> --> <br>
                        <label for="value_inwords">Valor por extenso: </label>
                            <input type="text" class="form-control col-md-4" name="value_inwords" value="___________________________________" id="value_inwords" placeholder=""> <br>
                        <label for="referent">Referente a:</label>
                            <input type="text" class="form-control col-md-4" name="referent" value="_____________________________" id="referent" placeholder=""> <br>
                        <label for="serv_jur">Serviços prestados:</label>
                            <input type="text" class="form-control col-md-4" name="serv_jur" value="______________ ____________________________________" id="serv_jur" placeholder=""> <br>
                        <label for="cidade">Cidade:</label>
                            <input type="text" class="form-control col-md-4" name="cidade" value="___________________" id="cidade" placeholder=""><br>
                        <label for="date">Data:</label>
                            <input type="text" class="form-control col-md-2" name="date" id="date" value="__ de _________ de ____" placeholder="dd/mm/aaaa" maxlength="25">
                            <small id="helpId"classtext-nuted>Você pode digitar a data por extenso</small>
                        <br>
                        <hr>
                        <input class="btn btn-success" type="submit" role="button" value="GERAR RECIBO">
                        </form>
                      </div>
                  <!-- </div>                
              </div>
          </div>
        </div> -->
    </div>
<div class="footerhome">
      <hr class="homeForm">
      <div class="footerPageText">
        <center>
          <a href="https://www.carlosferreira.adv.br">www.carlosferreira.adv.br</a> <br> <a href="https://www.carlosferreira.adv.br/app/geranota">Emitir notas promissórias</a>
        </center>
      </div>  
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>