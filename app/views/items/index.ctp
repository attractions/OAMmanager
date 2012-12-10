<div class="items index">
<h2><?php __('Items');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('ordereditemid');?></th>
	<th><?php echo $paginator->sort('custid');?></th>
	<th><?php echo $paginator->sort('orderid');?></th>
	<th><?php echo $paginator->sort('itemid');?></th>
	<th><?php echo $paginator->sort('quantity');?></th>
	<th><?php echo $paginator->sort('price');?></th>
	<th><?php echo $paginator->sort('shipped');?></th>
	<th><?php echo $paginator->sort('subid');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($items as $item):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $item['Item']['ordereditemid']; ?>
		</td>
		<td>
			<?php echo $item['Item']['custid']; ?>
		</td>
		<td>
			<?php echo $item['Item']['orderid']; ?>
		</td>
		<td>
			<?php echo $item['Item']['itemid']; ?>
		</td>
		<td>
			<?php echo $item['Item']['quantity']; ?>
		</td>
		<td>
			<?php echo $item['Item']['price']; ?>
		</td>
		<td>
			<?php echo $item['Item']['shipped']; ?>
		</td>
		<td>
			<?php echo $item['Item']['subid']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $item['Item']['ordereditemid'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $item['Item']['ordereditemid'])); ?>

			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $item['Item']['ordereditemid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $item['Item']['ordereditemid'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Item', true), array('action' => 'add')); ?></li>
	</ul>
</div>
