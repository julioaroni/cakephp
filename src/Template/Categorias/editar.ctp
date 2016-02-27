<?= $this->Form->create($categoria); ?>
    <fieldset>
        <legend>Registro de Categoria</legend>
        <?= $this->Form->hidden('id') ?>
        <?= $this->Form->input('nombre',['maxLength'=>20, 'label' => 'Nombre']) ?>
        <?= $this->Form->submit('Actualizar'); ?>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Categorias', 'action' => 'index'])?>

