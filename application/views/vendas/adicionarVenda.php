<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            
        <div class="widget-content nopadding">
         <table class="table table-bordered table-striped">
            <tbody>
               <tr class="odd gradeX">
                  <td style = "width: 70%">
                     <div class="span12" id="divEditarVenda">
                        <form action="<?php echo current_url(); ?>" method="post" id="formVendas"> 
                           <div class="span2" style="margin-left: 0">
                              <label for="dataInicial">Data<span class="required">*</span></label>
                              <input id="dataVenda" class="span12 datepicker" type="text" name="dataVenda" value="<?php echo date('d/m/Y'); ?>" />
                           </div>
                           <div class="span3">
                              <label for="cliente">Cliente<span class="required">*</span></label>
                              <input id="cliente" class="span12" type="text" name="cliente" value="" />
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="" />
                                            <div class="addclient"><?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) { ?>
    <a href="<?php echo base_url(); ?>index.php/clientes/adicionar" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar Cliente</a>
<?php } ?></div>
<input id="idLoja"   type="hidden" name="idLoja" value="<?php echo $this->session->userdata('idLoja'); ?>" />
                           </div>
                           <div class="span3">
                              <label for="tecnico">Vendedor<span class="required">*</span></label>
                              <input id="tecnico" class="span12" type="text" name="tecnico" value="<?= $this->session->userdata('nome'); ?>" />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?= $this->session->userdata('id'); ?>" />
                           </div>
                           <div class="span4"> 
                              <label for="observacoes">
                              Observa????es 
                              </label>
                              <input id="observacoes" class="span12" type="text" name="observacoes" value="" />
                           </div>
                     </div>
                  </td>
               </tr>
               <tr>
               <td> 
               <div class="span12" style="padding: 0%; margin-left: 0">
               <div class="span8 offset2" style="text-align: center">
                <button class="btn btn-success btn-large" id="btnContinuar" style=""><i class="fas fa-cash-register"></i> Iniciar</button>
                                            <a href="<?php echo base_url() ?>index.php/vendas" class="btn btn-danger btn-large"><i class="fas fa-backward"></i> Voltar</a>
               </div>
               </div>
               </form>
               </td>
               </tr>
            </tbody>
         </table>
      </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.addclient').hide();
        $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/vendas/autoCompleteCliente",
            minLength: 1,
            close: function(ui) { if(ui.label == 'Adicionar cliente...')ui.target.value = '';},
            select: function(event, ui) {
                if(ui.item.label == 'Adicionar cliente...')
                    $('.addclient').show();
                else
                    {
                        $("#clientes_id").val(ui.item.id);
                        $('.addclient').hide();
                    }
            }
        });
        $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/vendas/autoCompleteUsuario",
            minLength: 1,
            select: function(event, ui) {
                $("#usuarios_id").val(ui.item.id);
            }
        });
        $("#formVendas").validate({
            rules: {
                cliente: {
                    required: true
                },
                tecnico: {
                    required: true
                },
                dataVenda: {
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
                dataVenda: {
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
        $('.addclient').hide();
    });
</script>
