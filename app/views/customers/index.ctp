<div class="customers index">
<h2><?php __('Customers');?></h2>
<p>
<?php echo $form->create('Customer', array('action'=>'index'))?> 
<?php echo $form->text('Customer.billingemail');?>
</p>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('custid');?></th>
	<th><?php echo $paginator->sort('billingfirstname');?></th>
	<th><?php echo $paginator->sort('billinglastname');?></th>
	<th><?php echo $paginator->sort('billingaddress');?></th>
	<th><?php echo $paginator->sort('billingcity');?></th>
	<th><?php echo $paginator->sort('billingstate');?></th>
	<th><?php echo $paginator->sort('billingzip');?></th>
	<th><?php echo $paginator->sort('billingcountry');?></th>
	<th><?php echo $paginator->sort('billingtelephone');?></th>
	<th><?php echo $paginator->sort('billingemail');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($customers as $customer):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $customer['Customer']['custid']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingfirstname']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billinglastname']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingaddress']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingcity']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingstate']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingzip']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingcountry']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingtelephone']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['billingemail']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $customer['Customer']['custid'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $customer['Customer']['custid'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $customer['Customer']['custid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['custid'])); ?>
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
		<li><?php echo $html->link(__('New Customer', true), array('action' => 'add')); ?></li>
	</ul>
</div>
