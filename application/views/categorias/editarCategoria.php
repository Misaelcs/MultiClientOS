<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-user"></i>
                </span>
                <h5>Editar Categoria</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <?php if ($custom_error != '') {
    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formCategoria" method="post" class="form-horizontal">
                    <div class="control-group">
                        <?php echo form_hidden('idCategorias', $result->idCategorias) ?>
                        <label for="nome" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="categoria" type="text" name="categoria" value="<?php echo $result->categoria; ?>" />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Tipo*</label>
                        <div class="controls">
                            <select name="tipo" id="tipo">
                                <?php if ($result->tipo == 'Despesa') {
    $despesa = 'selected';
    $receita = '';
} else {
    $despesa = '';
    $receita = 'selected';
} ?>
                                <option value="Despesa" <?php echo $despesa; ?>>Despesa</option>
                                <option value="Receita" <?php echo $receita; ?>>Receita</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" style="display:flex">
                                <button type="submit" class="button btn btn-primary">
                                  <span class="button__icon"><i class="bx bx-sync"></i></span><span class="button__text2">Atualizar</span></button>
                                <a href="<?php echo base_url() ?>index.php/categorias" id="" class="button btn btn-mini btn-warning">
                                  <span class="button__icon"><i class="bx bx-undo"></i></span> <span class="button__text">Voltar</span></a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#formCategoria').validate({
            rules: {
                categoria: {
                    required: true
                },
                tipo: {
                    required: true
                },
            },
            messages: {
                categoria: {
                    required: 'Campo Requerido.'
                },
                tipo: {
                    required: 'Campo Requerido.'
                },
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

    });
</script>
