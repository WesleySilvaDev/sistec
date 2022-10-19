<?php
 
date_default_timezone_set('America/Sao_Paulo');
   
$totalServico = 0;
   $totalProdutos = 0; ?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>OS - NÃO FISCAL</title>
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
       <br>
    <table class="printer-ticket"> 
		<tr>
			<th colspan="3" class="ttu" style="width:100%;">
			    <br>
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
       <table class="printer-ticket" style="width:100%" > 
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
     	<table class="printer-ticket" style="width:100%"> 
		    <tr>
		        <td><center><b>===  N° DOCUMENTO <?php echo $result->idOs ?> ===</b></center>   </td>
		    </tr> 
		</table>
		<table class="printer-ticket" style="width:100%"> 
		<?php if ($result->dataInicial != null) { ?>
		    <tr>
		        <td class="ttu"  style="width:33%"><center> <b>STATUS</b> </center> </td>
		        <td class="ttu" style="width:33%"><center> <b>ENTRADA</b> </center> </td>
		        <td class="ttu" style="width:33%"><center> <b>SAÍDA</b> </center> </td>
		    </tr> 
		    <tr>
		        <td  class="ttu"><center> <?php echo $result->status ?> </center> </td>
		        <td class="ttu"><center> <?php echo date('d/m/Y', strtotime($result->dataInicial)); ?> </center> </td>
		        <td class="ttu"><center> <?php echo $result->dataFinal ? date('d/m/Y', strtotime($result->dataFinal)) : ''; ?> </center> </td>
		    </tr> 
		    	<?php } ?>
		</table>
		    <?php if ($result->descricaoProduto != null) { ?>
		<table class="printer-ticket"  style="width:100%;">
		    <tr>
		        <td style="width:100%"><b>APARELHO:</b><br> <?php echo htmlspecialchars_decode($result->descricaoProduto) ?></td>
		    </tr>
		</table>
		<table class="printer-ticket"  style="width:100%;">
		    <tr>
             <td>MODELO:</td>
                               <td align="right"><?php echo htmlspecialchars_decode($result->descricaoModelo) ?></td>
                            </tr>
                            <tr>
                               <td>COR:</td>
                               <td align="right"> <?php echo htmlspecialchars_decode($result->descricaoCor) ?></td>
                            </tr>
                            <tr>
                               <td>IMEI 1:</td>
                               <td align="right"> <?php echo htmlspecialchars_decode($result->descricaoIMEI1) ?></td>
                            </tr>
                            <tr>
                               <td>IMEI 2:</td>
                               <td align="right"> <?php echo htmlspecialchars_decode($result->descricaoIMEI2) ?></td>
                            </tr>
                            <tr>
                               <td>SN:</td>
                               <td align="right"> <?php echo htmlspecialchars_decode($result->descricaoSN) ?></td>
                            </tr>
		</table>
		      <?php } ?>
		
	<table  class="printer-ticket"  style="width:100%"> 
                           
                           <?php if ($result->defeito != null) { ?>
                           <tr>
                              <td style="width:100%">
                                 <b>DEFEITO:</b><br>
                                 <?php echo htmlspecialchars_decode($result->defeito) ?>
                              </td>
                           </tr>
                           <?php } ?> 
                           <?php if ($result->laudoTecnico != null) { ?>
                           <tr>
                              <td style="width:100%">
                                 <b>LAUDO TÉCNICO:</b><br>
                                 <?php echo htmlspecialchars_decode($result->laudoTecnico) ?>
                              </td>
                           </tr>
                           <?php } ?>
                           <?php if ($result->observacoes != null) { ?>
                           <tr>
                              <td style="width:100%"><b>OBSERVAÇÕES:</b><br>
                                 <?php echo htmlspecialchars_decode($result->observacoes) ?>
                              </td>
                           </tr>
                           <?php } ?>
		</table>
	
		
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
		    <?php } ?>
		</table> 
		<table class="printer-ticket" style="width:100%"> 
		    <tr > 
		        <td style="width:100%" align="right"><b>TOTAL PRODUTOS: R$  <?php echo number_format($totalProdutos, 2, ',', '.'); ?></b></td>   
		    </tr>  
		</table> 
		   <?php
                 } ?>
                 
                 
                 
        	      <?php if ($servicos != null) { ?>
	    <table class="printer-ticket" style="width:100%"> 
		    <tr> 
		        <td style="width:85%"><b> SERVIÇO(S) </b></td> 
		        <td style="width:15%" align="right"><b> VALOR</b></td>
		    </tr> 
		    <?php
                              setlocale(LC_MONETARY, 'en_US');
                              foreach ($servicos as $s) {
                                  $preco = $s->preco ?: $s->precoVenda;
                                  $subtotal = $preco * ($s->quantidade ?: 1); 
                                  $totalServico = $totalServico + $subtotal;  ?>
		    <tr> 
		        <td style="width:85%" > <?php echo ($s->quantidade ?: 1).' - '.$s->nome ?>  </td> 
		        <td style="width:15%" align="right">  <?php echo number_format($subtotal, 2, ',', '.')?> </td>
		    </tr>  
		    <?} ?>
		</table> 
		<table class="printer-ticket" style="width:100%"> 
		    <tr > 
		        <td style="width:100%" align="right"><b>TOTAL SERVIÇOS: R$  <?php echo number_format($totalServico, 2, ',', '.'); ?></b></td>   
		    </tr>  
		</table> 
		   <?php
                 } ?>
		
	 
		<table class="printer-ticket" style="width:100%">  
		    <tr> 
		        <td style="width:60%"><b>TOTAL GERAL: </b></td>  
		        <td align="right" style="width:40%"><b> 
		        R$   
		        <?php if ($totalProdutos == 0 and $totalServico == 0) { echo('0,00');
		        }else{
		           if ($totalProdutos != 0 || $totalServico != 0) {  echo number_format($totalProdutos + $totalServico, 2, ',', '.'); } 
		        }
		         ?>
		         </b></td>
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
		            
		        <?php  if ($result->status =='Finalizado' || $result->status =='Faturado') {?>
		            <center>
		            # COMPROVANTE DE GARANTIA #</center><BR> 
		            GARANTIA DE <?php if($result->garantia !=''){echo $result->garantia . ' DIAS';}else{ echo' 0 DIAS';} ?> VÁLIDA ATÉ <?php echo dateInterval($result->dataFinal, $result->garantia); ?> PARA  O(S) SERVIÇO(S) DESCRITOS ACIMA. 
		            A GARANTIA SÓ É VÁLIDA COM A APRESENTAÇÃO DESSE COMPROVANTE.
		            <br><b>PROBLEMAS CAUSADOS POR MAL USO OU QUEDAS NÃO SÃO COBERTOS PELA GARANTIA.</b>
		            
		            <?php }else 
					if ($result->status =='Cancelado'){ ?>
		            
		             <center> # ORDEM DE SERVIÇO #</center> <BR> SERVIÇO CANCELADO, O APARELHO NÃO FOI CONSERTADO.
		                 <?php }else {?>
		                
		                <center> # ORDEM DE SERVIÇO #</center> <BR> O APARELHO SERÁ ENTREGUE APENAS MEDIANTE A APRESENTAÇÃO DESSE RECIBO
		                
		            <?php }?>
		        </td>
		    </tr>
		    <tr>
			    <td>
			    <center><b>---------------------------------------------</b></center>
			</td>
			</tr>
		    <tr>
		        <td><center>Emitido em <?php echo date('d/m/Y h:i a'); ?> </center>   </td>
		    </tr>
		</table>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/matrix.js"></script>
      <script>  window.print();  </script>
   </body>
</html>
<?php } ?> 