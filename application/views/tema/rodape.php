<div class="row-fluid" style="background-color:#f6f6f600;">
    <div id="footer" class="span12"> 
            <?= date('Y'); ?> &copy; SISTEC - Versão:
      <?= $this->config->item('app_version'); ?></a></div>
</div>
<style>
    .row-fluid{
        background-color:#f6f6f600;
    }
</style>
<!--end-Footer-part-->
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/matrix.js"></script>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        var dataTableEnabled = '<?php echo $configuration['control_datatable']; ?>';
        if(dataTableEnabled == '1') {
            $('#tabela').dataTable( {
                "ordering": false,
                "language": {
                    "url": "<?= base_url(); ?>assets/js/dataTable_pt-br.json"
                }
            } );
        }
    } );
</script>
</html>
