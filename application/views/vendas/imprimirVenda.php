<?php $totalProdutos = 0; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>RECIBO_DE_VENDA_<?php echo $result->idVendas ?></title>
 <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
      <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link href="<?= base_url('assets/css/custom.css'); ?>" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
      <style>
         .table {
         margin-bottom: 5px;
         }
      </style>
      </head>
<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="invoice-content">
                  <div class="invoice-head" style="margin-bottom: 0">
                      <!--  CABEÇALHO -->
                      
                      
                      
                      <table class="table table-bordered table-condensed">
    <thead>
        <tr>
           <th>RECIBO DE COMPRA</th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
             <table class="table table-bordered table-condensed">
                            <tbody>
                                <?php if ($emitente == null) { ?>
                                    <tr>
                                        <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a>
                                            <<<</td> </tr> <?php
                                                        } else { ?> <tr>
                                        <td style="width: 35%;" ><img src=" <?php echo $emitente[0]->url_logo; ?> "></td>

                                        
                                        <td style="width: 65%; text-align: right">
                                                <font size="3"><b>COD. DA VENDA: <span> #<?php echo $result->idVendas ?></span></b></font>
                                                <br>
                                                <span>Emissão:  <?php echo date('d/m/Y'); ?></span>

                                            <?php if ($result->faturado) : ?>
                                                <br>
                                                Vencimento: <?php echo date('d/m/Y', strtotime($result->data_vencimento)); ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php
                                                        } ?>
                            </tbody>
                        </table>
                         <!--  INFORMAÇÕES DE CADASTRO -->
                     <table class="table table-bordered table-condensed">
   <thead>
      <tr>
         <th style="width: 50%"><?php echo $emitente[0]->nome; ?></th>
         <th style="width: 50%">CLIENTE</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>
             <?php echo $emitente[0]->cnpj; ?><br>
             <?php echo $emitente[0]->rua.', Nº:'.$emitente[0]->numero.','.$emitente[0]->bairro.'-'.$emitente[0]->cidade.'-'. $emitente[0]->uf; ?><br>
             <?php echo $emitente[0]->telefone; ?> 
         </td>
         <td>
             <?php 
             if($result->rua!=''){$result->rua= $result->rua;}
             if($result->bairro!=''){$result->bairro= ','.$result->bairro;}
             if($result->cidade!=''){$result->cidade= ','.$result->cidade;}
             if($result->estado!=''){$result->estado='-'.$result->estado ;}
             if($result->documento!=''){$result->documento.'<br>';}
             ?>
             <?php echo $result->nomeCliente ?> <br>
             <?php echo $result->documento ?>
             <?php echo $result->rua.$result->numero.$result->bairro.$result->cidade.$result->estado ?>
         </td>
      </tr>
   </tbody>
</table>
                           
            </td>
        </tr>
    </tbody>
    </table>
                        
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
           <th>LISTA DE PRODUTOS</th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div style="margin-top: 0; padding-top: 0">
                        <?php if ($produtos != null) { ?>
                            <table class="table table-bordered table-condensed" id="tblProdutos">
                                <thead>
                                    <tr style="background-color: #2D335B">
                                        <th style="font-size: 12px">COD</th>
                                        <th style="font-size: 12px">PRODUTO</th>
                                        <th style="font-size: 12px">QTD</th>
                                        <th style="font-size: 12px">VALOR UNI R$</th>
                                        <th style="font-size: 12px">SUB TOTAL R$</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produtos as $p) {
                                        $totalProdutos = $totalProdutos + $p->subTotal;
                                        echo '<tr>';
                                        echo '<td>' . $p->codDeBarra . '</td>';
                                        echo '<td>' . $p->descricao . '</td>';
                                        echo '<td>' . $p->quantidade . '</td>';
                                        echo '<td>' . ($p->preco ?: $p->precoVenda) . '</td>';
                                        echo '<td> ' . number_format($p->subTotal, 2, ',', '.') . '</td>';
                                        echo '</tr>';
                                    } ?>
                                    <tr>
                                        <td  colspan="4" style="text-align: right"><strong>TOTAL R$:</strong></td>
                                        <td> <strong>  <?php echo number_format($totalProdutos, 2, ',', '.'); ?></strong></td>
                                    </tr>
                                        <table class="table table-bordered table-condensed">
                                        <tbody>
                                         <tr>
                                            <td>
                                                <center><br>
                                                "Agradecer será sempre pouco para reconhecer o privilégio que é ter você como nosso cliente.
                                            <br> Obrigado pela confiança e por fazer parte da nossa história!"
                                            </center>
                                            </td>
                                            <td>
                                        <?php if ($qrCode) : ?>
<center>Pagamento via PIX:<br><img  src="<?= $qrCode ?>" alt="QR Code de Pagamento" width="130px"/> </center>
<?php endif ?>
                                            </td>
                                            
                                         </tr>   
                                        </tbody>
                                    </table>
                                </tbody>
                            </table>
                        <?php
                        } ?>
                        
                    </div>
            </td>
        </tr>
    </tbody>
</table>
                                            
                            
                        
                  </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/matrix.js"></script>
    <script>
        window.print();
    </script>
</body>

</html>
