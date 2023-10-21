<!--sidebar-menu-->
<nav id="sidebar">
    <div id="newlog">
        <div class="icon2">
            <img src="<?php echo base_url() ?>assets/img/logo-two.png">
        </div>
        <div class="title1">
            <?= $configuration['app_theme'] == 'white' ? '<img src="' . base_url() . 'assets/img/logo-mapos.png">' : '<img src="' . base_url() . 'assets/img/logo-mapos-branco.png">'; ?>
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
            <button style="background: transparent;border: transparent" type="submit" class="tip-bottom" title="Pesquisar">
                <i class='bx bx-search iconX'></i></button>
            <input type="search" name="termo" placeholder="Pesquise aqui...">
        </form>
    </li>
    <!-- End Pesquisar-->

    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links" style="position: relative;">
                <li class="<?php if (isset($menuPainel)) {
    echo 'active';
}; ?>">
                    <a href="<?= base_url() ?>"><i class='bx bx-home-alt iconX'></i>
                        <span class="title nav-title">Início</span></a>
                </li>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?>
                    <li class="<?php if (isset($menuClientes)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('clientes') ?>"><i class='bx bx-group iconX'></i>
                            <span class="title">Cliente / Fornecedor</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
                    <li class="<?php if (isset($menuProdutos)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('produtos') ?>"><i class='bx bx-package iconX'></i>
                            <span class="title">Produtos</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
                    <li class="<?php if (isset($menuServicos)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('servicos') ?>"><i class='bx bx-stopwatch iconX'></i>
                            <span class="title">Serviços</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
                    <li class="<?php if (isset($menuVendas)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('vendas') ?>"><i class='bx bx-cart-alt iconX'></i></span>
                            <span class="title">Vendas</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
                    <li class="<?php if (isset($menuOs)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('os') ?>"><i class='bx bx-spreadsheet iconX'></i>
                            <span class="title">Ordens de Serviço</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vGarantia')) { ?>
                    <li class="<?php if (isset($menuGarantia)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('garantias') ?>"><i class='bx bx-receipt iconX'></i>
                            <span class="title">Termos de Garantias</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
                    <li class="<?php if (isset($menuArquivos)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('arquivos') ?>"><i class='bx bx-box iconX'></i>
                            <span class="title">Arquivos</span></a>
                    </li>
                <?php } ?>

                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
                    <li class="<?php if (isset($menuLancamentos)) {
    echo 'active';
}; ?>">
                        <a href="<?= site_url('financeiro/lancamentos') ?>"><i class="bx bx-bar-chart-square iconX"></i>
                            <span class="title">Lançamentos</span></a>
                    </li>
                <?php } ?>
                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
                <li class="<?php if (isset($menuCobrancas)) {
    echo 'active';
}; ?>">
                    <a href="<?= site_url('cobrancas/cobrancas') ?>"><i class='bx bx-credit-card-front iconX'></i>
                        <span class="title">Cobranças</span></a>
                </li>
                <?php } ?>
                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCategoria')) { ?>
                <li class="<?php if (isset($menuCobrancas)) {
    echo 'active';
}; ?>">
                    <a href="<?= site_url('categorias') ?>"><i class='bx bx-label iconX'></i>
                        <span class="title">Categorias</span></a>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="botton-content">
            <li class="">
                <a href="<?= site_url('login/sair'); ?>">
                    <i class='bx bx-log-out-circle iconX'></i>
                    <span class="title">Sair</span></a>
            </li>
        </div>
    </div>
</nav>
<!--End sidebar-menu-->
