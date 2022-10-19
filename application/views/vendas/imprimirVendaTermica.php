<?php $totalProdutos = 0; ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title></title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
      <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
      <style>
     .text-center {
  text-align: center;
}
.ttu {
  text-transform: uppercase;
}
.printer-ticket {
  display: table !important;
  width: 100%;
  max-width: 400px;
  font-weight: light;
  line-height: 1.3em;
}
.printer-ticket,
.printer-ticket * {
  font-family: Tahoma, Geneva, sans-serif;
  font-size: 9px;
}
.printer-ticket th:nth-child(2),
.printer-ticket td:nth-child(2) {
  width: 50px;
}
.printer-ticket th:nth-child(3),
.printer-ticket td:nth-child(3) {
  width: 90px;
  text-align: right;
}
.printer-ticket linha {
  font-weight: inherit;
  padding: 10px 0;
  text-align: center;
  border-bottom: 2px solid #BCBCBC;
}
.printer-ticket tbody tr:last-child td {
  padding-bottom: 10px;
}
.printer-ticket tfoot .sup td {
  padding: 10px 0;
  border-top: 1px dashed #BCBCBC;
}
.printer-ticket tfoot .sup.p--0 td {
  padding-bottom: 0;
}
.printer-ticket .title {
  font-size: 1.5em;
  padding: 15px 0;
}
.printer-ticket .top td {
  padding-top: 10px;
}
.printer-ticket .last td {
  padding-bottom: 10px;
}

 
 
      </style>
   </head>
   <body>
 <!-- partial:index.partial.html -->
 <table class="printer-ticket"> 
		<tr>
			<th colspan="3" class="ttu">
			    <br><br>
			    <?php if ($emitente == null) { ?>
                          Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a>
                                 <<< 
                           <?php
                              } else { ?> 
                                
                                 <span style="font-size:30px;"><?php echo $emitente[0]->nome; ?></span><br>
                                 <span ><B>ASSISTÊNCIA TÉCNICA ESPECIALIZA</B></span>
                                 <br><br>
                                 <?php echo 'CNPJ: '.$emitente[0]->cnpj; ?><br>
                                 <?php echo $emitente[0]->rua . ', ' .$emitente[0]->numero . ', ' . $emitente[0]->bairro . ' - ' . $emitente[0]->cidade . ' - ' . $emitente[0]->uf; ?><br>
                                 <?php echo   $emitente[0]->telefone; 
                        
                              } ?>
			    
			    
			</th>
		</tr>
		</table>
		<?php if ($result->nomeCliente=='#NÃO CADASTRADO#'){echo'<br>';
		}else{?>
		    <table class="printer-ticket"  > 
		    <tr>
		        <td class="ttu"> 
		            <br>
		            <center><b>=== DADOS DO CLIENTE ===</b></center><br>
		            <p style="text-align: left">
				    <b>NOME:</b> <?php echo $result->nomeCliente ?> <br> 
				    <b>END:</b> <?php echo $result->rua.' '.$result->numero.' '.$result->bairro.' '.$result->cidade.' '.$result->estado ?><br>
				    <b>TEL:</b> <?php echo $result->celular ?>  <br>
				</p>
		            
		        </td>
		    </tr> 
		</table>
		<?php }?>
		 
		<table class="printer-ticket"> 
		    <tr>
		        <td><center><b>=== CUPOM NÃO FISCAL ===</b></center>   </td>
		    </tr> 
		</table>
		<?php if ($produtos != null) { ?>
	    <table class="printer-ticket" style="width:100%"> 
		    <tr> 
		        <td style="width:85%"><b> PRODUTO(S) </b></td> 
		        <td style="width:15%" align="right"><b> VALOR</b></td>
		    </tr> 
		    <?php
                              foreach ($produtos as $p) {
                                  $totalProdutos = $totalProdutos + $p->subTotal;  ?>
		    <tr> 
		        <td style="width:85%" > <?php echo $p->quantidade.' - '.$p->descricao ?>  </td> 
		        <td style="width:15%" align="right">  <?php echo number_format($p->subTotal, 2, ',', '.')?> </td>
		    </tr>  
		    <?php} ?>
		</table> 
		<table class="printer-ticket" style="width:100%"> 
		    <tr > 
		        <td style="width:60%"><b>TOTAL A PAGAR: </b></td>  
		        <td align="right" style="width:40%"><b> R$  <?php echo number_format($totalProdutos, 2, ',', '.'); ?></b></td>
		    </tr>  
		</table>
		<table class="printer-ticket"> 
		    <tr>
		        <td><center><b>CÓD. VENDA:</b>  <?php echo $result->idVendas ?></center>   </td>
		    </tr> 
		</table>  
		
		
		<table class="printer-ticket"> 
			<tr>
			    <td>
			    <center><b>---------------------------------------------</b></center>
			</td>
			</tr>
		    <tr>
		        <td>
		            
		            <center>
		            # RECIBO DE COMPRA #</center><BR> 
		            GUARDE SEU RECIBO PARA O CASO DE TROCA DE PRODUTO(S)
		          
		        </td>
		    </tr>
		    <tr>
		        <td><center><BR>OBRIGADO! TENHA UM ÓTIMO DIA E ATÉ A PRÓXIMA COMPRA :)</center>   </td>
		    </tr>
		    <tr>
			    <td>
			    <center><b>---------------------------------------------</b></center>
			</td>
			</tr>
		    <tr>
		        <td><center>Emitido em <?php echo date('d/m/Y'); ?> </center>   </td>
		    </tr>
		</table>
		
		   <?php
                        }} ?>
	 
       
       
    
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/matrix.js"></script>
      <script>
         window.print();
      </script>
   </body>
</html>
