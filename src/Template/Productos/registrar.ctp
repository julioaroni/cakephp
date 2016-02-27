<h2>Mantenimiento de Productos</h2>

<?= $this->Form->create($producto, array('type' => 'file')); ?>
<!-- 'file' define el atributo 'enctype="multipart/form-data"' -->
    <fieldset>
        <legend>Registro de Producto</legend>
        <?= $this->Form->input('categorias_id', ['type' => 'select', 'multiple' => false, 'options' => $categorias, 'empty' => true]) ?>
        <?= $this->Form->input('nombre',['maxLength'=>100, 'label' => 'Nombre']) ?>
        <?= $this->Form->input('precio',['maxLength'=>10, 'label' => 'Precio']) ?>
        <?= $this->Form->input('stock',['maxLength'=>10, 'label' => 'Stock']) ?>
        <?= $this->Form->input('imagen',['type' => 'file', 'label' => 'Imagen']) ?>
        <?= $this->Form->input('descripcion',['rows' => '5', 'label' => 'Descripción']) ?>
        <?= $this->Form->submit(); ?>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Productos', 'action' => 'index'])?>
