<?php 
require_once 'MobileDetect/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ( $detect->isMobile() ) { ?>
    
    <!--sidebar-menu-->
<nav id="sidebar" disabled="true">
    <div id="newlog">
        <div class="icon2">
            <img src="<?php echo base_url() ?>assets/img/logopng.png">
        </div> 
    </div>
    <a href="#" class="visible-phone">
        <div class="mode">
            <div class="moon-menu">
                <i class='bx bx-menu iconX open-2'></i>
                <i class='bx bx-x iconX close-2'></i>
            </div>
        </div>
    </a>
    <!-- Start Pesquisar-->
    <li class="search-box">
        <form style="display: flex" action="<?= site_url('mapos/pesquisar') ?>">
            <button style="background: transparent;border: transparent" type="submit" class="tip-bottom" title="">
                <i class='bx bx-search iconX'></i></button>
            <input type="search" name="termo" placeholder="Pesquise aqui...">
            <span class="title-tooltip">Pesquisar</span>
        </form>
    </li>
    <!-- End Pesquisar-->
    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links" style="position: relative;">
                <li class="<?php if (isset($menuPainel)) {
    echo 'active';
}; ?>">
                    <a class="tip-bottom" title="" href="<?= base_url() ?>"><i class='bx bx-home-alt iconX'></i>
                        <span class="title nav-title">Home</span>
                        <span class="title-tooltip">Início</span>
                    </a>
                </li>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?>
                    <li class="<?php if (isset($menuClientes)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('clientes') ?>"><i class='bx bx-group iconX'></i>
                            <span class="title">Cliente / Fornecedor</span>
                            <span class="title-tooltip">Clientes</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
                    <li class="<?php if (isset($menuProdutos)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('produtos') ?>"><i class='bx bx-package iconX'></i>
                            <span class="title">Produtos</span>
                            <span class="title-tooltip">Produtos</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
                    <li class="<?php if (isset($menuServicos)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('servicos') ?>"><i class='bx bx-stopwatch iconX'></i>
                            <span class="title">Serviços</span>
                            <span class="title-tooltip">Serviços</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
                    <li class="<?php if (isset($menuVendas)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('vendas') ?>"><i class='bx bx-cart-alt iconX'></i></span>
                            <span class="title">Vendas</span>
                            <span class="title-tooltip">Vendas</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
                    <li class="<?php if (isset($menuOs)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('os') ?>"><i class='bx bx-spreadsheet iconX'></i>
                            <span class="title">Ordens de Serviço</span>
                            <span class="title-tooltip">Ordens</span>
                        </a>
                    </li>
                <?php } ?>

          

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
                    <li class="<?php if (isset($menuArquivos)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('arquivos') ?>"><i class='bx bx-box iconX'></i>
                            <span class="title">Arquivos</span>
                            <span class="title-tooltip">Arquivos</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
                    <li class="<?php if (isset($menuLancamentos)) {
    echo 'active';
}; ?>">
                        <a class="tip-bottom" title="" href="<?= site_url('financeiro/lancamentos') ?>"><i class="bx bx-bar-chart-square iconX"></i>
                            <span class="title">Lançamentos</span>
                            <span class="title-tooltip">Lançamentos</span>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        </div>

        <div class="botton-content">
            <li class="">
                <a class="tip-bottom" title="" href="<?= site_url('login/sair'); ?>">
                    <i class='bx bx-log-out-circle iconX'></i>
                    <span class="title">Sair</span>
                    <span class="title-tooltip">Sair</span>
                </a>
            </li>
        </div>
    </div>
    </nav>
<!--End sidebar-menu-->
    
<?php }else{ 
if( $this->session->userdata('idLoja') =='0wr3r0'){ // modo edição ( colocar o seu IdLoja )?>
  <!--sidebar-menu-->
<nav id="sidebar" style=" width: 95px; background: #2e363f; top: -5px;" >
    <div id="newlog">
        <div class="icon2">
           
        </div> 
    </div>
    <a href="#" class="visible-phone">
        <div class="mode">
            <div class="moon-menu">
                <i class='bx bx-menu iconX open-2'></i>
                <i class='bx bx-x iconX close-2'></i>
            </div>
        </div>
    </a>
 
    <!-- End Pesquisar-->
    
    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links" style="position: relative; padding: 0px 0px 0px 0px;">
                <li class="<?php if (isset($menuPainel)) {  echo 'active'; }; ?>" style="margin-top: 0px; height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                    <a class="tip-bottom" title="" href="<?= base_url() ?>" style="display: grid;"> 
                        <span> <i class='fas fa-home iconX' style="color:#ffffffba; font-size:23px;"></i> 
                            <span class="iconX" style="font-size:13px; color:#ffffffba;">INICIAL</span>  
                        </span> 
                        <span class="title-tooltip">Página inicial</span>
                    </a>
                </li>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?> 
                
                <li class="<?php if (isset($menuClientes)) { echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('clientes') ?>" style="display: grid;"> 
                            <span > <i class='fas fa-users iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba;font-size:13px;">CLIENTES</span>  
                            </span> 
                            <span class="title-tooltip">Clientes e fornecedores</span> 
                        </a>   
                        
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
                    <li class="<?php if (isset($menuProdutos)) { echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('produtos') ?>" style="display: grid;">  
                            <span > <i class='bx bx-package iconX'style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba;font-size:13px;">PRODUTOS</span>  
                            </span> 
                            <span class="title-tooltip">Produtos</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
                    <li class="<?php if (isset($menuServicos)) {   echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('servicos') ?>" style="display: grid;">  
                            <span > <i class='bx bx-stopwatch iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">SERVIÇOS</span>  
                            </span> 
                            <span class="title-tooltip">Serviços</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
                    <li class="<?php if (isset($menuVendas)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('vendas') ?>" style="display: grid;">  
                            <span > <i class='bx bx-dollar iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">VENDAS</span>  
                            </span> 
                            <span class="title-tooltip">Vendas</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
                    <li class="<?php if (isset($menuOs)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('os') ?>" style="display: grid;">  
                        <span > <i class='bx bx-spreadsheet iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">ORD. SERVIÇO</span>  
                            </span>  
                            <span class="title-tooltip">Ordens de serviço</span>
                        </a>
                    </li>
                <?php } ?>

          

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
                    <li class="<?php if (isset($menuArquivos)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('arquivos') ?>" style="display: grid;">   
                            <span > <i class='bx bx-box iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">ARQUIVOS</span>  
                            </span> 
                            <span class="title-tooltip">Arquivos</span>
                        </a>
                    </li> 
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
                    <li class="<?php if (isset($menuLancamentos)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('financeiro/lancamentos') ?>" style="display: grid;">  
                            <span> <i class='fas fa-cash-register iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">FINANCEIRO</span>  
                            </span> 
                            <span class="title-tooltip">Lançamentos</span>
                        </a>
                    </li>
                <?php } ?>
                  
                <li class="<?php if (isset($menuLancamentos)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('login/sair'); ?>" style="display: grid;">  
                            <span> <i class='bx bx-log-out-circle iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">SAIR</span>  
                            </span>
                        </a>
                    </li>

            </ul>
        </div>
 
                
        </div>
    </div>
 </nav>
<!--End sidebar-menu-->    
<?php }else{ ?>
 <!--sidebar-menu-->
<nav id="sidebar" style=" width: 95px; background: #2e363f; top: -11px;">
    <div id="newlog">
        <div class="icon2">
          
        </div> 
    </div>
    <a href="#" class="visible-phone" >
        <div class="mode">
            <div class="moon-menu">
                <i class='bx bx-menu iconX open-2'></i>
                <i class='bx bx-x iconX close-2'></i>
            </div>
        </div>
    </a>
 
    <!-- End Pesquisar-->
    
    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links" style="position: relative; padding: 0px 0px 0px 0px;" >
                <li class="<?php if (isset($menuPainel)) {  echo 'active'; }; ?>" style="margin-top: 0px; height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                    <a class="tip-bottom" title="" href="<?= base_url() ?>" style="display: grid;" > 
                        <span> <i class='fas fa-home iconX' style="color:#ffffffba; font-size:23px;"></i> 
                            <span class="iconX" style="font-size:13px; color:#ffffffba;">INICIAL</span>  
                        </span> 
                        <span class="title-tooltip">Página inicial</span>
                    </a>
                </li>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?> 
                
                <li class="<?php if (isset($menuClientes)) { echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('clientes') ?>" style="display: grid;"> 
                            <span > <i class='fas fa-users iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba;font-size:13px;">CLIENTES</span>  
                            </span> 
                            <span class="title-tooltip">Clientes e fornecedores</span> 
                        </a>   
                        
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
                    <li class="<?php if (isset($menuProdutos)) { echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('produtos') ?>" style="display: grid;">  
                            <span > <i class='bx bx-package iconX'style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba;font-size:13px;">PRODUTOS</span>  
                            </span> 
                            <span class="title-tooltip">Produtos</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
                    <li class="<?php if (isset($menuServicos)) {   echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('servicos') ?>" style="display: grid;">  
                            <span > <i class='bx bx-stopwatch iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">SERVIÇOS</span>  
                            </span> 
                            <span class="title-tooltip">Serviços</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
                    <li class="<?php if (isset($menuVendas)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('vendas') ?>" style="display: grid;">  
                            <span > <i class='bx bx-dollar iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">VENDAS</span>  
                            </span> 
                            <span class="title-tooltip">Vendas</span>
                        </a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
                    <li class="<?php if (isset($menuOs)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('os') ?>" style="display: grid;">  
                        <span > <i class='bx bx-spreadsheet iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">ORD. SERVIÇO</span>  
                            </span>  
                            <span class="title-tooltip">Ordens de serviço</span>
                        </a>
                    </li>
                <?php } ?>

          

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
                    <li class="<?php if (isset($menuArquivos)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('arquivos') ?>" style="display: grid;">   
                            <span > <i class='bx bx-box iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">ARQUIVOS</span>  
                            </span> 
                            <span class="title-tooltip">Arquivos</span>
                        </a>
                    </li> 
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
                    <li class="<?php if (isset($menuLancamentos)) {  echo 'active'; }; ?>" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('financeiro/lancamentos') ?>" style="display: grid;">  
                            <span> <i class='fas fa-cash-register iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">FINANCEIRO</span>  
                            </span> 
                            <span class="title-tooltip">Lançamentos</span>
                        </a>
                    </li>
                <?php } ?>
                  
                <li class="" style="margin-top: 0px;height: 65px; display: grid; border-top: 1px solid #37414b; border-bottom: 1px solid #1f262d;">
                        <a class="tip-bottom" title="" href="<?= site_url('login/sair'); ?>" style="display: grid;">  
                            <span> <i class='bx bx-log-out-circle iconX' style="color:#ffffffba;font-size:23px;"></i> 
                            <span class="iconX" style="color:#ffffffba; font-size:13px;">SAIR</span>  
                            </span>
                        </a>
                    </li>

            </ul>
        </div>
 
                
        </div>
    </div>
 </nav>
<!--End sidebar-menu-->   
    <?php }  } ?>



