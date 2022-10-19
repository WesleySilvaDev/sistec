<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>

<style>
    .ui-datepicker {
        z-index: 9999 !important;
    }

    .trumbowyg-box {
        margin-top: 0;
        margin-bottom: 0;
    }
</style>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box"> 
            <div class="widget-content nopadding tab-content">
          
 
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                           <table class="table table-bordered table-striped">
      <thead>
         <tr>
            <th style="width: 50%">
               <h5>ORDEM DE SERVIÇO</h5>
            </th>
            <th style="width: 50%">
               <h5>INFORMAÇÕES DO APARELHO</h5>
            </th>
         </tr>
      </thead>
      <tbody>
         <tr class="odd gradeX">
            <td>
                <form action="<?php echo current_url(); ?>" method="post" id="formOs">
                
                <div class="span12" style="padding: 0%; margin-left: 0">
                                        <div class="span12">
                                            <label for="cliente">Cliente<span class="required">*</span></label>
                                            <input id="cliente" class="span12" type="text" name="cliente" value=""  placeholder="Informe o nome do cliente">
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="" />
                                              <input id="idLoja"   type="hidden" name="idLoja" value="<?php echo $this->session->userdata('idLoja'); ?>" />
                                        </div>
                                        <div class="span8" style="padding: 0%; margin-left: 0">
                                            <label for="tecnico">Técnico <span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value="<?= $this->session->userdata('nome'); ?>" />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?= $this->session->userdata('id'); ?>" />
                                        </div>
                                        <div class="span4">
                                            <label for="status">Status<span class="required">*</span></label>
                                            <select class="span12" name="status" id="status" value="">
                                                <option value="Aberto">Aberto</option>
                                                <option value="Orçamento">Orçamento</option>
                                                <option value="Em Andamento">Em Andamento</option>
                                                <option value="Finalizado">Finalizado</option>
                                                <option value="Cancelado">Cancelado</option>
                                                <option value="Aguardando Peças">Aguardando Peças</option>
                                                <option value="Aprovado">Aprovado</option>
                                            </select>
                                        </div>
                                    </div>
                <div class="span12" style="padding: 0%; margin-left: 0">
                                        
                                        <div class="span6">
                                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                                            <input id="dataInicial" autocomplete="off" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y'); ?>" />
                                        </div>
                                        <div class="span6">
                                            <label for="dataFinal">Data Final<span class="required">*</span></label>
                                            <input id="dataFinal" autocomplete="off" class="span12 datepicker" type="text" name="dataFinal" value="" />
                                        </div>
                                        <div class="span12" style="padding: 0%; margin-left: 0">
                                        <div class="span6">
                                            <label for="garantia">Garantia (dias)</label>
                                            <input id="garantia" type="number" min="0" max="9999" class="span12" name="garantia" value="" />
                                            <?php echo form_error('garantia'); ?>
                                            </div>
                                            <div class="span6">
                                            <label for="termoGarantia">Termo de garantia</label>
                                            <input id="termoGarantia" class="span12" type="text" name="termoGarantia" value="" />
                                            <input id="garantias_id" class="span12" type="hidden" name="garantias_id" value="" />
                                        </div>
                                    </div>
                                    <div class="span12 offset2" style="padding: 0%; margin-left: 0 ">  
                                     <hr>    
                                         &nbsp  
                                     <center> 
                                            <button class="btn btn-success " id="btnContinuar"><i class="fas fa-plus"></i> Continuar </button>
                                            <a href="<?php echo base_url() ?>index.php/os" class="btn btn-danger "><i class="fas fa-backward"></i> Voltar</a>
                                       </center>  
                                    </div>
                                     </div>
                  
            </td>
            <td>
               <div class="span12" style="padding: 0%; margin-left: 0">
                <div class="span6">
                                        <label for="cliente">Produto<span class="required"></span></label>
                                        <input id="descricaoProduto" class="span12" type="text" name="descricaoProduto" value="" / placeholder="Especifique o aparelho">  
                </div>
                <div class="span6" >
                                        <label for="cliente">Modelo<span class="required"></span></label>
                                        <input id="descricaoModelo" class="span12" type="text" name="descricaoModelo" value="" / placeholder="Modelo"> 
                </div>
                <div class="span12" style="padding: 0%; margin-left: 0">
                <div class="span6" style="padding: 0%;">
                                        <label for="cliente">IMEI<span class="required"></span></label>
                                        <input id="descricaoIMEI1" class="span12" type="text" name="descricaoIMEI1" value="" / placeholder="35xxxxxxxxxxxxx">
                </div>
                <div class="span6" style="padding: 0%;">
                                        <label for="cliente">IMEI<span class="required"></span></label>
                                        <input id="descricaoIMEI2" class="span12" type="text" name="descricaoIMEI2" value="" / placeholder="35xxxxxxxxxxxxx">  
                </div>
                </div>
                <div class="span12" style="padding: 0%; margin-left: 0">
                <div class="span6" style="padding: 0%;">
                                        <label for="cliente">N° de série ( SN )<span class="required"></span></label>
                                        <input id="descricaoSN" class="span12" type="text" name="descricaoSN" value="" / placeholder="Verso do aparelho">  
                </div>
                <div class="span6" style="padding: 0%;">
                                        <label for="cliente">COR<span class="required"></span></label>
                                        <input id="descricaoCor" class="span12" type="text" name="descricaoCor" value="" / placeholder="Cor principal">  
                </div> 
                </div>
 
                 
                 
                                    <div class="span6" style="padding: 0%; margin-left: 0">
                                        <label for="defeito">
                                            <h5>Defeito</h5>
                                        </label>
                                        <textarea class="span12" name="defeito" id="defeito" cols="10" rows="1"></textarea>
                                    </div>
                                    <div class="span6" style="padding: 0%;">
                                        <label for="observacoes">
                                            <h5>Observações</h5>
                                        </label>
                                        <textarea  class="span12" name="observacoes" id="observacoes" cols="10" rows="1"></textarea>
                                    </div>
                                    <div class="span12" style="padding: 0%; margin-left: 0">
                                        <label for="laudoTecnico">
                                            <h5>Laudo Técnico</h5>
                                        </label>
                                        <textarea class="span12" name="laudoTecnico" id="laudoTecnico" cols="10" rows="1"></textarea>
                                    </div>
                                     </form>
                                    
               </div>
            </td>
         </tr>
      </tbody>
   </table>
                        </div>
                    </div>
               
                .
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteCliente",
            minLength: 1,
            select: function(event, ui) {
                $("#clientes_id").val(ui.item.id);
            }
        });
        $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 1,
            select: function(event, ui) {
                $("#usuarios_id").val(ui.item.id);
            }
        });
        $("#termoGarantia").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteTermoGarantia",
            minLength: 1,
            select: function(event, ui) {
                $("#garantias_id").val(ui.item.id);
            }
        });

        $("#formOs").validate({
            rules: {
                cliente: {
                    required: true
                },
                tecnico: {
                    required: true
                },
                dataInicial: {
                    required: true
                },
                dataFinal: {
                    required: true
                }

            },
            messages: {
                cliente: {
                    required: 'Campo Requerido.'
                },
                tecnico: {
                    required: 'Campo Requerido.'
                },
                dataInicial: {
                    required: 'Campo Requerido.'
                },
                dataFinal: {
                    required: 'Campo Requerido.'
                }
            },
            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
        $(".datepicker").datepicker({
            dateFormat: 'dd/mm/yy'
        });
        $('.editor').trumbowyg({
            lang: 'pt_br'
        });
    });
</script>
