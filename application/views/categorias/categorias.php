<div class="new122">
  <a href="<?php echo base_url() ?>index.php/categorias/adicionar" class="button btn btn-success" style="max-width: 180px">
  <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Adicionar Categoria</span></a>

<div class="widget-box">
    <div class="widget-title" style="margin: -20px 0 0">
        <span class="icon">
            <i class="fas fa-user"></i>
        </span>
        <h5>Categorias</h5>

    </div>
    <div class="widget-content nopadding tab-content">
        <table id="tabela" class="table table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th>Tipo</th>
                    <th width='40px'>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!$results) {
                        echo '<tr>
                                <td colspan="5">Nenhuma Categoria Cadastrada</td>
                            </tr>';
                    }
                    foreach ($results as $r) {
                        echo '<tr>';
                        echo '<td>' . $r->idCategorias . '</td>';
                        echo '<td>' . $r->categoria . '</td>';
                        echo '<td>' . $r->tipo . '</td>';
                        echo '<td>
                                <a href="' . base_url() . 'index.php/categorias/editar/' . $r->idCategorias . '" class="btn-nwe3" title="Editar OS"><i class="bx bx-edit"></i></a>
                                </td>';
                        echo '</tr>';
                    } ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php echo $this->pagination->create_links(); ?>
