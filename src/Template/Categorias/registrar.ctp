<?= $this->Form->create($categoria); ?>
    <fieldset>
        <legend>Registro de Categoria</legend>
        <?= $this->Form->input('nombre',array('maxLength'=>20, 'label' => 'Nombre')) ?>
        <?= $this->Form->submit('Guardar'); ?>
    </fieldset>
<?= $this->Form->end(); ?>

<br/>

<?= $this->Html->link('<< Regresar', ['controller' => 'Categorias', 'action' => 'index'])?>


