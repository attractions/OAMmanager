<div class="subscriptions form">
<?php echo $form->create('Subscription');?>
	<fieldset>
 		<legend><?php __('Edit Subscription');?></legend>
	<?php
		echo $form->input('subscriptionid');
		echo $form->input('subfirstname');
		echo $form->input('sublastname');
		echo $form->input('subaddress');
		echo $form->input('subcity');
		echo $form->input('substate');
		echo $form->input('subzip');
		echo $form->input('subcountry');
		echo $form->input('subtelephone');
		echo $form->input('numissues');
		echo $form->input('lastsent');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Subscription.subscriptionid')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Subscription.subscriptionid'))); ?></li>
		<li><?php echo $html->link(__('List Subscriptions', true), array('action' => 'index'));?></li>
	</ul>
</div>
