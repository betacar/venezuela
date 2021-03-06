<div class="municipios view">
<h2><?php  __('Municipio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($municipio['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $municipio['Estado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipio', true), array('action' => 'edit', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Municipio', true), array('action' => 'delete', $municipio['Municipio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciudades', true), array('controller' => 'ciudades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciudade', true), array('controller' => 'ciudades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parroquias', true), array('controller' => 'parroquias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parroquia', true), array('controller' => 'parroquias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Ciudades');?></h3>
	<?php if (!empty($municipio['Ciudade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Parroquia Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Codigoarea'); ?></th>
		<th><?php __('Codigopostal'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($municipio['Ciudade'] as $ciudade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ciudade['id'];?></td>
			<td><?php echo $ciudade['parroquia_id'];?></td>
			<td><?php echo $ciudade['municipio_id'];?></td>
			<td><?php echo $ciudade['estado_id'];?></td>
			<td><?php echo $ciudade['nombre'];?></td>
			<td><?php echo $ciudade['codigoarea'];?></td>
			<td><?php echo $ciudade['codigopostal'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ciudades', 'action' => 'view', $ciudade['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ciudades', 'action' => 'edit', $ciudade['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ciudades', 'action' => 'delete', $ciudade['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciudade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ciudade', true), array('controller' => 'ciudades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Parroquias');?></h3>
	<?php if (!empty($municipio['Parroquia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($municipio['Parroquia'] as $parroquia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $parroquia['id'];?></td>
			<td><?php echo $parroquia['nombre'];?></td>
			<td><?php echo $parroquia['estado_id'];?></td>
			<td><?php echo $parroquia['municipio_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'parroquias', 'action' => 'view', $parroquia['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'parroquias', 'action' => 'edit', $parroquia['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'parroquias', 'action' => 'delete', $parroquia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $parroquia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parroquia', true), array('controller' => 'parroquias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
