<div class="orders form">
<?php echo $form->create('Order');?>
	<fieldset>
 		<legend><?php __('Edit Order');?></legend>
	<?php
		echo $form->input('orderid');
		echo $form->input('custid');
		echo $form->input('shippingfirstname');
		echo $form->input('shippinglastname');
		echo $form->input('shippingaddress');
		echo $form->input('shippingcity');
		echo $form->input('shippingstate');
		echo $form->input('shippingzip');
		echo $form->input('shippingcountry');
		echo $form->input('shippingtelephone');
		echo $form->input('shippingamount');
		echo $form->input('ipaddress');
		echo $form->input('date');
		echo $form->input('time');
		echo $form->input('transid');
		echo $form->input('paid');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Order.orderid')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Order.orderid'))); ?></li>
		<li><?php echo $html->link(__('List Orders', true), array('action' => 'index'));?></li>
	</ul>
</div>
