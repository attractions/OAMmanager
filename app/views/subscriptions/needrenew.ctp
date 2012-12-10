<div class="subscriptions index">
<h2><?php __('0 Issues Remaining');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('subscriptionid');?></th>
	<th><?php echo $paginator->sort('subfirstname');?></th>
	<th><?php echo $paginator->sort('sublastname');?></th>
	<th><?php echo $paginator->sort('subaddress');?></th>
	<th><?php echo $paginator->sort('subcity');?></th>
	<th><?php echo $paginator->sort('substate');?></th>
	<th><?php echo $paginator->sort('subzip');?></th>
	<th><?php echo $paginator->sort('subcountry');?></th>
	<th><?php echo $paginator->sort('subtelephone');?></th>
	<th><?php echo $paginator->sort('numissues');?></th>
	<th><?php echo $paginator->sort('lastsent');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subscriptions as $subscription):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subscription['Subscription']['subscriptionid']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['subfirstname']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['sublastname']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['subaddress']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['subcity']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['substate']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['subzip']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['subcountry']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['subtelephone']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['numissues']; ?>
		</td>
		<td>
			<?php echo $subscription['Subscription']['lastsent']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $subscription['Subscription']['subscriptionid'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $subscription['Subscription']['subscriptionid'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $subscription['Subscription']['subscriptionid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['Subscription']['subscriptionid'])); ?>
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
		<li><?php echo $html->link(__('New Subscription', true), array('action' => 'add')); ?></li>
	</ul>
</div>
