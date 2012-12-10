<?php if(isset($subscriptions)){
	include("index.ctp");
 } else {?>
<div class="subscriptions">
<h2>Lookup Subscription</h2>
<?php echo $form->create('Subscription', array("action" => "lookup")); ?>
<?php echo $form->input("Name");?>
<?php echo $form->end('Search'); ?>
</div>
<?php } ?>
