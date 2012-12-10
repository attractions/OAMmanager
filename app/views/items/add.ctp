<div class="items form">
<?php echo $form->create('Item');?>
	<fieldset>
 		<legend><?php __('Add Item');?></legend>
	<?php
		echo $form->input('ordereditemid');
		echo $form->input('custid');
		echo $form->input('orderid');
		echo $form->input('itemid');
		echo $form->input('quantity');
		echo $form->input('price');
		echo $form->input('shipped');
		echo $form->input('subid');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Items', true), array('action' => 'index'));?></li>
	</ul>
</div>
