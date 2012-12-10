<div class="orders index">
<h2><?php __('Orders');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('orderid');?></th>
	<th><?php echo $paginator->sort('custid');?></th>
	<th><?php echo $paginator->sort('shippingfirstname');?></th>
	<th><?php echo $paginator->sort('shippinglastname');?></th>
	<th><?php echo $paginator->sort('shippingaddress');?></th>
	<th><?php echo $paginator->sort('shippingcity');?></th>
	<th><?php echo $paginator->sort('shippingstate');?></th>
	<th><?php echo $paginator->sort('shippingzip');?></th>
	<th><?php echo $paginator->sort('shippingcountry');?></th>
	<th><?php echo $paginator->sort('shippingtelephone');?></th>
	<th><?php echo $paginator->sort('shippingamount');?></th>
	<th><?php echo $paginator->sort('ipaddress');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('time');?></th>
	<th><?php echo $paginator->sort('transid');?></th>
	<th><?php echo $paginator->sort('paid');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($orders as $order):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $order['Order']['orderid']; ?>
		</td>
		<td>
			<?php echo $order['Order']['custid']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingfirstname']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippinglastname']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingaddress']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingcity']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingstate']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingzip']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingcountry']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingtelephone']; ?>
		</td>
		<td>
			<?php echo $order['Order']['shippingamount']; ?>
		</td>
		<td>
			<?php echo $order['Order']['ipaddress']; ?>
		</td>
		<td>
			<?php echo $order['Order']['date']; ?>
		</td>
		<td>
			<?php echo $order['Order']['time']; ?>
		</td>
		<td>
			<?php echo $order['Order']['transid']; ?>
		</td>
		<td>
			<?php echo $order['Order']['paid']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $order['Order']['orderid'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $order['Order']['orderid'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $order['Order']['orderid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $order['Order']['orderid'])); ?>
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
		<li><?php echo $html->link(__('New Order', true), array('action' => 'add')); ?></li>
	</ul>
</div>
