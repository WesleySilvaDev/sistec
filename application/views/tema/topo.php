<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title><?= $configuration['app_name'] ?: 'SISTEC' ?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/matrix-style.css?v=<?=filesize('assets/css/matrix-style.css');?>" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/matrix-media.css?v=<?=filesize('assets/css/matrix-media.css');?>" />
  <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/tema.css?v=<?=filesize('assets/css/tema.css');?>" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;500;700&display=swap' rel='stylesheet' type='text/css'>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/shortcut.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/funcoesGlobal.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/datatables.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweetalert.min.js"></script>
  <script type="text/javascript">
    shortcut.add("escape", function() {
      location.href = '<?= base_url(); ?>';
    });
    shortcut.add("F1", function() {
      location.href = '<?= site_url('clientes'); ?>';
    });
    shortcut.add("F2", function() {
      location.href = '<?= site_url('produtos'); ?>';
    });
    shortcut.add("F3", function() {
      location.href = '<?= site_url('servicos'); ?>';
    });
    shortcut.add("F4", function() {
      location.href = '<?= site_url('os'); ?>';
    });
    //shortcut.add("F5", function() {});
    shortcut.add("F6", function() {
      location.href = '<?= site_url('vendas'); ?>';
    });
    shortcut.add("F7", function() { });
    shortcut.add("F8", function() {});
    shortcut.add("F9", function() {});
    shortcut.add("F10", function() {});  
    window.BaseUrl = "<?= base_url() ?>";
  </script>
    <style>
    
    </style>
</head>
<body style="background-color:#eeeeee">
    
    
<?php 
require_once 'MobileDetect/Mobile_Detect.php';
$detect = new Mobile_Detect;


if ( $detect->isMobile() ){ ?>

<!--top-Header-menu-->
<div class="navebarn">
  <div id="user-nav" class="navbar navbar-inverse">

    <ul class="nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Meu Perfil" class="tip-bottom"><i class='bx bx-user-circle iconN'></i><span class="text"><?= $this->session->userdata('nome') ?></span></a>
        <ul class="dropdown-menu">
       <!-- <li class=""><a title="Área do Cliente" href="<?//= site_url(); ?>/mine"> <span class="text">Área do Cliente</span></a></li> -->
          <li class=""><a title="Meu Perfil" href="<?= site_url('mapos/minhaConta'); ?>"><span class="text">MEU PERFIL</span></a></li>
          <li class="divider"></li>
          <li class=""><a title="Sair do Sistema" href="<?= site_url('login/sair'); ?>"><i class='bx bx-log-out-circle'></i> <span class="text">SAIR DO SISTEMA</span></a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Relatórios" class="tip-bottom"><i class='bx bx-chart iconN'></i><span class="text"> RELATÓRIOS</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('relatorios/clientes') ?>">CLIENTES</a></li>
          <li><a href="<?= site_url('relatorios/produtos') ?>">PRODUTOS</a></li>
          <li><a href="<?= site_url('relatorios/servicos') ?>">SERVIÇOS</a></li>
          <li><a href="<?= site_url('relatorios/os') ?>">ORDENS DE SERVIÇO</a></li>
          <li><a href="<?= site_url('relatorios/vendas') ?>">VENDAS</a></li>
          <li><a href="<?= site_url('relatorios/financeiro') ?>">FINANCEIRO</a></li>
          <li><a href="<?= site_url('relatorios/sku') ?>">SKU</a></li>
          <li><a href="<?= site_url('relatorios/receitasBrutasMei') ?>">RECEITAS BRUTAS - MEI</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Configurações" class="tip-bottom"><i class='bx bx-cog iconN'></i><span class="text"> ADMINISTRAÇÃO</span></a>
        <ul class="dropdown-menu">
       <!-- <li><a href="<?//= site_url('mapos/configurar') ?>">Sistema</a></li> -->
        <li><a href="<?= site_url('usuarios') ?>">ADICIONAR E REMOVER FUNCIONÁRIOS</a></li>
        <li><a href="<?= site_url('permissoes') ?>">GRUPOS DE FUNCIONARIOS</a></li>
        <li><a href="<?= site_url('mapos/emitente') ?>">CONFIG. DADOS DA EMPRESA</a></li>
       <!--  <li><a href="<?//= site_url('auditoria') ?>">Auditoria</a></li> -->
       <!--  <li><a href="<?//= site_url('mapos/emails') ?>">Emails</a></li> -->
       <!--  <li><a href="<?//= site_url('mapos/backup') ?>">Backup</a></li> -->
        </ul>
      </li> 
    </ul>
  </div>

<!-- New User -->
<div id="userr" style="padding-right:45px;display:flex;flex-direction:column;align-items:flex-end;justify-content:center;">
  <div class="user-names userT0"> <?php function saudacao($nome = '')
{
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H');
    if ($hora >= 6 && $hora <= 12) {
        return 'Bom dia' . (empty($nome) ? '' : ', ' . $nome);
    } elseif ($hora > 12 && $hora <=18) {
        return 'Boa tarde' . (empty($nome) ? '' : ', ' . $nome);
    } else {
        return 'Boa noite' . (empty($nome) ? '' : ', ' . $nome);
    }
} $login = '';
    echo saudacao($login); // Irá retornar conforme o horário:?>,
  </div>
  <div class="userT"><?= $this->session->userdata('nome') ?></div>

  <section style="display:block;position:absolute;right:10px">
  <div class="profile">
    <div class="profile-img">
      <a href="<?= site_url('mapos/minhaConta'); ?>"><img src="<?= !is_file(FCPATH . "assets/userImage/" . $this->session->userdata('url_image_user')) ?  base_url() . "assets/img/User.png" : base_url() . "assets/userImage/" . $this->session->userdata('url_image_user') ?>" alt=""></a>
    </div>
  </div>
</section>

</div>
</div>
<!-- End User -->

<!--start-top-serch EDITAR ISSO DPS-->
<div style="display: none" id="search">
    <form action="<?= site_url('mapos/pesquisar') ?>">
      <input type="text" name="termo" placeholder="Pesquisar..." />
      <button type="submit" class="tip-bottom" title="Pesquisar"><i class="fas fa-search fa-white"></i></button>
    </form>
  </div>
  <!--close-top-serch-->   
  
    
<?php }else{
if( $this->session->userdata('idLoja') =='00'){ // modo edição ( colocar o seu IdLoja ) ?>
<!--top-Header-menu-->
<div class="navebarn" style="margin-left: 92px; background-color: #1f262d;">
  <div id="user-nav" class="navbar navbar-inverse">

    <ul class="nav">
      
      <li class="dropdown" style="border-left: 1px solid #2e363f;  border-right: 1px solid #000;">
        <a href="#" class="dropdown-toggle" style="padding: 9px 10px; display: block;  font-size: 11px;" data-toggle="dropdown" title="Meu Perfil" class="tip-bottom"><i class='bx bx-user-circle iconN'></i><span class="text"><?= $this->session->userdata('nome') ?></span></a>
        <ul class="dropdown-menu">
       <!-- <li class=""><a title="Área do Cliente" href="<?//= site_url(); ?>/mine"> <span class="text">Área do Cliente</span></a></li> -->
          <li class=""><a title="Meu Perfil" href="<?= site_url('mapos/minhaConta'); ?>"><span class="text">MEU PERFIL</span></a></li>
          <li class="divider"></li>
          <li class=""><a title="Sair do Sistema" href="<?= site_url('login/sair'); ?>"><i class='bx bx-log-out-circle'></i> <span class="text">SAIR DO SISTEMA</span></a></li>
        </ul>
      </li>

      <li class="dropdown" style="border-left: 1px solid #2e363f;  border-right: 1px solid #000;">
        <a href="#" class="dropdown-toggle" style="padding: 9px 10px; display: block;  font-size: 11px;" data-toggle="dropdown" title="Relatórios" class="tip-bottom"><span class="text"><i class='bx bx-chart iconN'></i>  RELATÓRIOS</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('relatorios/clientes') ?>">CLIENTES</a></li>
          <li><a href="<?= site_url('relatorios/produtos') ?>">PRODUTOS</a></li>
          <li><a href="<?= site_url('relatorios/servicos') ?>">SERVIÇOS</a></li>
          <li><a href="<?= site_url('relatorios/os') ?>">ORDENS DE SERVIÇO</a></li>
          <li><a href="<?= site_url('relatorios/vendas') ?>">VENDAS</a></li>
          <li><a href="<?= site_url('relatorios/financeiro') ?>">FINANCEIRO</a></li>
          <li><a href="<?= site_url('relatorios/sku') ?>">SKU</a></li>
          <li><a href="<?= site_url('relatorios/receitasBrutasMei') ?>">RECEITAS BRUTAS - MEI</a></li>
        </ul>
      </li>

       <li class="dropdown" style="border-left: 1px solid #2e363f;  border-right: 1px solid #000;">
        <a href="#" class="dropdown-toggle" style="padding: 9px 10px; display: block;  font-size: 11px;" data-toggle="dropdown" title="Configurações" class="tip-bottom"><i class='bx bx-cog iconN'></i><span class="text"> ADMINISTRAÇÃO</span></a>
        <ul class="dropdown-menu">
       <!-- <li><a href="<?//= site_url('mapos/configurar') ?>">Sistema</a></li> -->
        <li><a href="<?= site_url('usuarios') ?>">ADICIONAR E REMOVER FUNCIONÁRIOS</a></li>
        <li><a href="<?= site_url('permissoes') ?>">GRUPOS DE FUNCIONARIOS</a></li>
        <li><a href="<?= site_url('mapos/emitente') ?>">CONFIG. DADOS DA EMPRESA</a></li>
       <!--  <li><a href="<?//= site_url('auditoria') ?>">Auditoria</a></li> -->
       <!--  <li><a href="<?//= site_url('mapos/emails') ?>">Emails</a></li> -->
       <!--  <li><a href="<?//= site_url('mapos/backup') ?>">Backup</a></li> -->
        </ul>
      </li> 
    </ul>
  </div>

<!-- New User -->
<div id="userr" style="padding-right:45px;display:flex;flex-direction:column;align-items:flex-end;justify-content:center;">
  <div class="user-names userT0"> <?php function saudacao($nome = '')
{
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H');
    if ($hora >= 6 && $hora <= 12) {
        return 'Bom dia' . (empty($nome) ? '' : ', ' . $nome);
    } elseif ($hora > 12 && $hora <=18) {
        return 'Boa tarde' . (empty($nome) ? '' : ', ' . $nome);
    } else {
        return 'Boa noite' . (empty($nome) ? '' : ', ' . $nome);
    }
} $login = '';
    echo saudacao($login); // Irá retornar conforme o horário:?>,
  </div>
  <div class="userT"><?= $this->session->userdata('nome') ?></div>

  <section style="display:block;position:absolute;right:10px">
  <div class="profile">
    <div class="profile-img">
      <a href="<?= site_url('mapos/minhaConta'); ?>"><img src="<?= !is_file(FCPATH . "assets/userImage/" . $this->session->userdata('url_image_user')) ?  base_url() . "assets/img/User.png" : base_url() . "assets/userImage/" . $this->session->userdata('url_image_user') ?>" alt=""></a>
    </div>
  </div>
</section>

</div>
</div>
<!-- End User -->

<!--start-top-serch EDITAR ISSO DPS-->
<div style="display: none" id="search">
    <form action="<?= site_url('mapos/pesquisar') ?>">
      <input type="text" name="termo" placeholder="Pesquisar..." />
      <button type="submit" class="tip-bottom" title="Pesquisar"><i class="fas fa-search fa-white"></i></button>
    </form>
  </div>
  <!--close-top-serch-->
 
     
<?php }else { // modo usuário ?>

 <!--top-Header-menu-->
<div class="navebarn" style="margin-left: 92px; background-color: #1f262d;">
  <div id="user-nav" class="navbar navbar-inverse">

    <ul class="nav">
      
      <li class="dropdown" style="border-left: 1px solid #2e363f;  border-right: 1px solid #000;">
        <a href="#" class="dropdown-toggle" style="padding: 9px 10px; display: block;  font-size: 11px;" data-toggle="dropdown" title="Meu Perfil" class="tip-bottom"><i class='bx bx-user-circle iconN'></i><span class="text"><?= $this->session->userdata('nome') ?></span></a>
        <ul class="dropdown-menu">
       <!-- <li class=""><a title="Área do Cliente" href="<?//= site_url(); ?>/mine"> <span class="text">Área do Cliente</span></a></li> -->
          <li class=""><a title="Meu Perfil" href="<?= site_url('mapos/minhaConta'); ?>"><span class="text">MEU PERFIL</span></a></li>
          <li class="divider"></li>
          <li class=""><a title="Sair do Sistema" href="<?= site_url('login/sair'); ?>"><i class='bx bx-log-out-circle'></i> <span class="text">SAIR DO SISTEMA</span></a></li>
        </ul>
      </li>

      <li class="dropdown" style="border-left: 1px solid #2e363f;  border-right: 1px solid #000;">
        <a href="#" class="dropdown-toggle" style="padding: 9px 10px; display: block;  font-size: 11px;" data-toggle="dropdown" title="Relatórios" class="tip-bottom"><span class="text"><i class='bx bx-chart iconN'></i>  RELATÓRIOS</span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('relatorios/clientes') ?>">CLIENTES</a></li>
          <li><a href="<?= site_url('relatorios/produtos') ?>">PRODUTOS</a></li>
          <li><a href="<?= site_url('relatorios/servicos') ?>">SERVIÇOS</a></li>
          <li><a href="<?= site_url('relatorios/os') ?>">ORDENS DE SERVIÇO</a></li>
          <li><a href="<?= site_url('relatorios/vendas') ?>">VENDAS</a></li>
          <li><a href="<?= site_url('relatorios/financeiro') ?>">FINANCEIRO</a></li>
          <li><a href="<?= site_url('relatorios/sku') ?>">SKU</a></li>
          <li><a href="<?= site_url('relatorios/receitasBrutasMei') ?>">RECEITAS BRUTAS - MEI</a></li>
        </ul>
      </li>

       <li class="dropdown" style="border-left: 1px solid #2e363f;  border-right: 1px solid #000;">
        <a href="#" class="dropdown-toggle" style="padding: 9px 10px; display: block;  font-size: 11px;" data-toggle="dropdown" title="Configurações" class="tip-bottom"><i class='bx bx-cog iconN'></i><span class="text"> ADMINISTRAÇÃO</span></a>
        <ul class="dropdown-menu">
       <!-- <li><a href="<?//= site_url('mapos/configurar') ?>">Sistema</a></li> -->
        <li><a href="<?= site_url('usuarios') ?>">ADICIONAR E REMOVER FUNCIONÁRIOS</a></li>
        <li><a href="<?= site_url('permissoes') ?>">GRUPOS DE FUNCIONARIOS</a></li>
        <li><a href="<?= site_url('mapos/emitente') ?>">CONFIG. DADOS DA EMPRESA</a></li>
       <!--  <li><a href="<?//= site_url('auditoria') ?>">Auditoria</a></li> -->
       <!--  <li><a href="<?//= site_url('mapos/emails') ?>">Emails</a></li> -->
       <!--  <li><a href="<?//= site_url('mapos/backup') ?>">Backup</a></li> -->
        </ul>
      </li> 
    </ul>
  </div>

<!-- New User -->
<div id="userr" style="padding-right:45px;display:flex;flex-direction:column;align-items:flex-end;justify-content:center;">
  <div class="user-names userT0"> <?php function saudacao($nome = '')
{
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H');
    if ($hora >= 6 && $hora <= 12) {
        return 'Bom dia' . (empty($nome) ? '' : ', ' . $nome);
    } elseif ($hora > 12 && $hora <=18) {
        return 'Boa tarde' . (empty($nome) ? '' : ', ' . $nome);
    } else {
        return 'Boa noite' . (empty($nome) ? '' : ', ' . $nome);
    }
} $login = '';
    echo saudacao($login); // Irá retornar conforme o horário:?>,
  </div>
  <div class="userT"><?= $this->session->userdata('nome') ?></div>

  <section style="display:block;position:absolute;right:10px">
  <div class="profile">
    <div class="profile-img">
      <a href="<?= site_url('mapos/minhaConta'); ?>"><img src="<?= !is_file(FCPATH . "assets/userImage/" . $this->session->userdata('url_image_user')) ?  base_url() . "assets/img/User.png" : base_url() . "assets/userImage/" . $this->session->userdata('url_image_user') ?>" alt=""></a>
    </div>
  </div>
</section>

</div>
</div>
<!-- End User -->

<!--start-top-serch EDITAR ISSO DPS-->
<div style="display: none" id="search">
    <form action="<?= site_url('mapos/pesquisar') ?>">
      <input type="text" name="termo" placeholder="Pesquisar..." />
      <button type="submit" class="tip-bottom" title="Pesquisar"><i class="fas fa-search fa-white"></i></button>
    </form>
  </div>
  <!--close-top-serch-->
 
     
    
<?php } } ?>

 

