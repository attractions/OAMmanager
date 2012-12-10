<div class="subscriptions index">
<?php
foreach($customers as $address){
	echo $address['first']." ".$address['last']."\n";
	echo "<br/>\n";
	echo $address['address']."\n";
	echo "<br/>\n";
	echo $address['city'].", ".$address['state']." ".$address['zip']."\n";
	echo "<br/>\n";
	echo "<br/>\n";
}
?>
</div>
