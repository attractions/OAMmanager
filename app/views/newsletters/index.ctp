<div class="newsletters index">
<h2><?php __('Newsletters');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('address');?></th>
	<th><?php echo $paginator->sort('city');?></th>
	<th><?php echo $paginator->sort('state');?></th>
	<th><?php echo $paginator->sort('zip');?></th>
	<th><?php echo $paginator->sort('country');?></th>
	<th><?php echo $paginator->sort('referral');?></th>
	<th><?php echo $paginator->sort('verified');?></th>
	<th><?php echo $paginator->sort('ipaddress');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('time');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($newsletters as $newsletter):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $newsletter['Newsletter']['id']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['name']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['email']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['address']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['city']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['state']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['zip']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['country']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['referral']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['verified']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['ipaddress']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['date']; ?>
		</td>
		<td>
			<?php echo $newsletter['Newsletter']['time']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $newsletter['Newsletter']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $newsletter['Newsletter']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $newsletter['Newsletter']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $newsletter['Newsletter']['id'])); ?>
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
		<li><?php echo $html->link(__('New Newsletter', true), array('action' => 'add')); ?></li>
	</ul>
</div>
