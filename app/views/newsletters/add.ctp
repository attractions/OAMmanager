<div class="newsletters form">
<?php echo $form->create('Newsletter');?>
	<fieldset>
 		<legend><?php __('Add Newsletter');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('address');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip');
		echo $form->input('country');
		echo $form->input('referral');
		echo $form->input('verified');
		echo $form->input('ipaddress');
		echo $form->input('date');
		echo $form->input('time');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Newsletters', true), array('action' => 'index'));?></li>
	</ul>
</div>
