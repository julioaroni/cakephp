<h2>Mostrar Productos</h2>

<td><?= $this->Number->currency($producto->precio, 'PEN', ['locale' => 'es_PE']) ?></td>
<!-- http://book.cakephp.org/3.0/en/core-libraries/number.html#formatting-currency-values -->
            <td><?= $producto->stock ?></td>
            <td><?= $this->Html->image('/catalogo/'.(($producto->imagen_nombre)?$producto->imagen_nombre:'empty.png'), ['alt' => $producto->imagen_nombre, 'width' => '64', 'height' => '64']); ?></td>
            <td><?= $this->Html->link('Mostrar', ['controller' => 'Productos', 'action' => 'mostrar', $producto->id]) ?></td>
            <td><?= $this->Html->link('Editar', ['controller' => 'Productos', 'action' => 'editar', $producto->id]) ?></td>

