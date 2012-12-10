<div class="subscriptions index">
<?php echo $form->create('Subscription', array("action" => "dead"));
echo $form->input("OneIssue", array('type' => 'checkbox', 'label' => 'One Issue Remaining'));
echo $form->input("Out", array('type' => 'checkbox', 'label' => 'Ran Out on Last Issue'));
echo $form->input("Dead", array('type' => 'checkbox', 'label' => 'Ran Out Before'));
echo $form->end('List');
?>
<p>
<?php if(isset($emails)){
	foreach($emails as $s){
		foreach($s as $e){
		echo $e['customers']['billingemail'].",";
		}
	}
	}
?>
</div>
