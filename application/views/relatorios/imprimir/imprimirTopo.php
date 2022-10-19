<?php 
foreach($emitente as $e){
if ($emitente && $e->idLoja == $this->session->userdata('idLoja')){ ?>
    <div>
        <br>
        <div style="width: 50%; float: left" class="float-left col-md-3">
            <img style="width: 150px" src="<?= convertUrlToUploadsPath($e->url_logo) ?>" alt=""><br><br>
        </div>
        <div style="float: right">
            <b>EMPRESA: </b> <?= $e->nome ?> <b>CNPJ: </b> <?= $e->cnpj ?><br>
            <b>ENDEREÇO: </b> <?= $e->rua ?>, <?= $e->numero ?>, <?= $e->bairro ?>, <?= $e->cidade ?> - <?= $e->uf ?> <br>

            <?php if (isset($title)): ?>
                <b>RELATÓRIO: </b> <?= $title ?> <br>
            <?php endif ?>

            <?php if (isset($dataInicial)): ?>
                <b>DATA INICIAL: </b> <?= $dataInicial ?>
            <?php endif ?>

            <?php if (isset($dataFinal)): ?>
                <b>DATA FINAL: </b> <?= $dataFinal ?>
            <?php endif ?>
        </div>
    </div>
<?php }} ?>
