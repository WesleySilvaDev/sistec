<?php 
require_once 'MobileDetect/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ( $detect->isMobile() ){ ?>
    
 <div id="content" style="">
<!--start-top-serch-->
  <div id="content-header"> 
    </div>
    <div class="container-flu">
      <div class="row-fluid">
        <div class="span12">
          <?php if ($var = $this->session->flashdata('success')): ?><script>swal("Sucesso!", "<?php echo str_replace('"', '', $var); ?>", "success");</script><?php endif; ?>
          <?php if ($var = $this->session->flashdata('error')): ?><script>swal("Falha!", "<?php echo str_replace('"', '', $var); ?>", "error");</script><?php endif; ?>
          <?php if (isset($view)) {
    echo $this->load->view($view, null, true);
} ?>
        </div>
      </div>
    </div>
  </div>   
    
<?php }else{  if( $this->session->userdata('idLoja') =='00'){ // modo edição ( colocar o seu IdLoja ) ?>

 <div id="content" style="margin-left: 95px;">
<!--start-top-serch-->
  <div id="content-header">
   
    </div>
    <div class="container-flu" >
      <div class="row-fluid" style="background-color:#f6f6f600">
        <div class="span12">
          <?php if ($var = $this->session->flashdata('success')): ?><script>swal("Sucesso!", "<?php echo str_replace('"', '', $var); ?>", "success");</script><?php endif; ?>
          <?php if ($var = $this->session->flashdata('error')): ?><script>swal("Falha!", "<?php echo str_replace('"', '', $var); ?>", "error");</script><?php endif; ?>
          <?php if (isset($view)) {
    echo $this->load->view($view, null, true);
} ?>
        </div>
      </div>
    </div>
  </div>     
     
<?php }else {?>

 <div id="content" style="margin-left: 95px;">
<!--start-top-serch-->
  <div id="content-header">  
    </div>
    <div class="container-flu" >
      <div class="row-fluid" style="background-color:#f6f6f600;">
        <div class="span12">
        
          <?php if ($var = $this->session->flashdata('success')): ?><script>swal("Sucesso!", "<?php echo str_replace('"', '', $var); ?>", "success");</script><?php endif; ?>
          <?php if ($var = $this->session->flashdata('error')): ?><script>swal("Falha!", "<?php echo str_replace('"', '', $var); ?>", "error");</script><?php endif; ?>
          <?php if (isset($view)) {
    echo $this->load->view($view, null, true);
} ?>
        </div>
      </div>
    </div>
  </div>   
     
    
<?php }  } ?>





