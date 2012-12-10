<div class="customers form">
<?php echo $form->create('Customer');?>
	<fieldset>
 		<legend><?php __('Add Customer');?></legend>
	<?php
		echo $form->input('custid');
		echo $form->input('billingfirstname');
		echo $form->input('billinglastname');
		echo $form->input('billingaddress');
		echo $form->input('billingcity');
		echo $form->input('billingstate');
		echo $form->input('billingzip');
		echo $form->input('billingcountry');
		echo $form->input('billingtelephone');
		echo $form->input('billingemail');
		echo $form->input('payment');
		echo $form->input('referral');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Customers', true), array('action' => 'index'));?></li>
	</ul>
</div>
