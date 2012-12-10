<div class="customers index">
<h2>Lookup Customer</h2>
<?php
echo $form->create('Customers', array('url'=>array('action'=>'index')));
echo $form->input('billingemail');
echo $form->end('Search');
?>
</div>
