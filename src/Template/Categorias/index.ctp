<?php //foreach ($roles as $row) { var_dump($row); } ?>
<h2>Mantenimiento de Categorias</h2>
<!-- <?php var_dump($categorias); ?> -->
<!-- <?php foreach ($categorias as $categoria); ?>

exit();  -->

<table class="table table-hover" border="1" width="100%">
    <caption>Lista de Categorias</caption>
    <colgroup>
        <col width="80"/>
        <col/>
        <col width="80"/>
        <col width="80"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    <?php
        foreach ($categorias as $categoria) {
    ?>
        <tr>
            <td><?= $categoria->id ?></td>
            <td><?= $categoria->nombre ?></td>
            <td><?= $this->Html->link('Editar', ['controller' => 'Categorias', 'action' => 'editar', $categoria->id]) ?></td>
            <td><?= $this->Html->link('Eliminar','/categorias/eliminar/'.$categoria->id) ?></td>
        </tr>
    <?php
        }
    ?>
   </tbody>
</table>

<br/>

<?= $this->Html->link('Nuevo', ['controller' => 'Categorias', 'action' => 'registrar'])?>
