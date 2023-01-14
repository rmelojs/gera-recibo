<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    ini_set('default_charset','utf-8');

    $name_pag = isset($_POST['name_pag'])?($_POST['name_pag']):"NOME NÃO INFORMADO    ";

    $amount   = isset($_POST['amount'  ])?($_POST['amount'  ]):"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

    $value_inwords = isset($_POST['value_inwords'])?($_POST['value_inwords'  ]):"VALOR NÃO INFORMADO   ";

    $referent = isset($_POST['referent'])?($_POST['referent']):"  NÃO INFORMADO       ";

    $serv_jur = isset($_POST['serv_jur'])?($_POST['serv_jur']):" NÃO INFORMADO        ";

    $cidade = isset($_POST['cidade'])?($_POST['cidade']):"Cidade Não Informada";

    $date     = isset($_POST['date'    ])?($_POST['date'    ]):"DATA NÃO INFORMADA    ";

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

?>
<center>
    <div class="container-rec" id="main">
        <div class="header" id="header">
            <div class="logo" id="logo">
                <img src="logotipo_recibo-online_vermelho_h73px.png" alt="">
            </div>
            <div class="phones" id="phones">
                Rua Dr. Feliciano Sodré, 215 Sl 715
            </div>
            <div class="phones1" id="phones1">
                Centro - São Gonçalo - RJ 
            </div>
            <div class="phones2" id="phones2">
                <!-- <span class="ttel">  -->
                21.3245-6768 / 21.96412-9272 <!-- </spam> -->
            </div>
        </div>

            <div class="body">
                <div class="row" id="title_body">
                    <div class="col">
                        <div class="text-title-recibo" id="title_recibo">
                            RECIBO
                        </div>
                        <div class="amount" id="amount">
                            <?php 
                            echo "<b>R$ $amount</b>";
                            ?>
                        </div>
                    </div>
                </div>
        
                <div class="text-recibo" id="text">
                    <div class="col">
                        <p>Declaro, a quem interessar possa, para todos os fins de direito, que recebi do Sr(a) <?php echo "<span class='namePag'><b> $name_pag</b></span>"; ?>, o valor de <?php echo "<b> $v_extens</b>" ?>, referente a <?php echo "<b> $referent</b>" ?>, pela prestação de serviços <?php echo "<b> $serv_jur </b>"; ?>.
                        </p>
                    </div>
            </div>

            <div class="col">
            <div class="footerDateAss" id="footerDAteAss">
                <div class="date" id="date">
                    <?php 
                    echo "<span class='assina'>$cidade, $date";
                    ?>
                </div>

                <div class="assina" id="signature">
                    <span class="assina">C</span>ARLOS <span class="assina">A</span>NTÔNIO <span class="assina">F</span>ERREIRA - OAB/RJ 96.075
                </div>
            </div>
        </div>
                <div class="footerMsg">
                    <div class="footerMsgL"><center> <a href="https://www.carlosferreira.adv.br">www.carlosferreira.adv.br</a><span class="hyphen"></span> </center>
                    </div>
                    <div class="footerMsgR"><center>Sem Advogado não há Direito, sem Direito não há Democracia.</center>
                    </div>
                </div>
        </div>            
    </div>
</center>
<hr class="recibos">
<center>
<div class="container-rec" id="main">
        <div class="header" id="header">
            <div class="logo" id="logo">
                <img src="logotipo_recibo-online_vermelho_h73px.png" alt="">
            </div>
            <div class="phones" id="phones">
                Rua Dr. Feliciano Sodré, 0000
            </div>
            <div class="phones1" id="phones1">
                Centro - São Gonçalo - RJ 
            </div>
            <div class="phones2" id="phones2">
                21.3333-3333 / 21.99999-9999 <!-- </spam> -->
            </div>
        </div>

            <div class="body">
                <div class="row" id="title_body">
                    <div class="col">
                        <div class="text-title-recibo" id="title_recibo">
                            RECIBO
                        </div>
                        <div class="amount" id="amount">
                            <?php 
                            echo "<b>R$ $amount</b>";
                            ?>
                        </div>
                    </div>
                </div>
        
                <div class="text-recibo" id="text">
                    <div class="col">
                        <p>Declaro, a quem interessar possa, para todos os fins de direito, que recebi do Sr(a) <?php echo "<span class='namePag'><b> $name_pag</b></span>"; ?>, o valor de <?php echo "<b> $value_inwords</b>" ?>, referente a <?php echo "<b> $referent</b>" ?>, pela prestação de serviços <?php echo "<b> $serv_jur </b>"; ?>.
                        </p>
                    </div>
            </div>

            <div class="col">
            <div class="footerDateAss" id="footerDAteAss">
                <div class="date" id="date">
                    <?php 
                    echo "<span class='assina'>$cidade, $date";
                    ?>
                </div>

                <div class="assina" id="signature">
                    <span class="assina">C</span>ARLOS <span class="assina">A</span>NTÔNIO <span class="assina">F</span>ERREIRA - OAB/RJ 96.075
                </div>
            </div>
        </div>
                <div class="footerMsg">
                    <div class="footerMsgL"><center> <a href="https://www.carlosferreira.adv.br">www.carlosferreira.adv.br</a><span class="hyphen"></span> </center>
                    </div>
                    <div class="footerMsgR"><center>Sem Advogado não há Direito, sem Direito não há Democracia.</center>
                    </div>
                </div>
        </div>            
    </div>
</center>
    <hr>
    <center><input type="button" value="REFAZER" class="btn btn-success" onClick="javascript:history.go(-1)">
</center>
    <br>
</body>
</html>