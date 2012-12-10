<div class="items view">
<h2><?php  __('Item');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['ordereditemid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($item['Customer']['billingfirstname']." ".$item['Customer']['billinglastname'], array('controller' => 'customers', 'action' => 'view', $item['Item']['custid']));?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($item['Item']['orderid'] != "0"){echo $html->link($item['Item']['orderid'], array('controller' => 'orders', 'action' => 'view', $item['Item']['orderid']));}else{echo "None";}?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subscription'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($item['Item']['subid'] != "0"){echo $html->link($item['Item']['subid'], array('controller' => 'subscriptions', 'action' => 'view', $item['Item']['subid']));}else{echo "None";}?>
                        &nbsp;
                </dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Item'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['itemid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['quantity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shipped'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['shipped']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Item', true), array('action' => 'edit', $item['Item']['ordereditemid'])); ?> </li>
		<li><?php echo $html->link(__('Delete Item', true), array('action' => 'delete', $item['Item']['ordereditemid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $item['Item']['ordereditemid'])); ?> </li>

		<li><?php echo $html->link(__('List Items', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Item', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
