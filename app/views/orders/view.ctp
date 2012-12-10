<div class="orders view">
<h2><?php  __('Order');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $order['Order']['orderid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ordering Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
<?php echo $html->link($order['Customer']['billingfirstname']." ".$order['Customer']['billinglastname'], array('controller' => 'customers', 'action' => 'view', $order['Order']['custid'])); ?>			
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shipping Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $order['Order']['shippingamount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('IP Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $order['Order']['ipaddress']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Placed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $order['Order']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $order['Order']['time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Transaction ID'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $order['Order']['transid']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Paid By'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Customer']['payment']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Referred By'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Customer']['referral']; ?>
                        &nbsp;
                </dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Paid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($order['Order']['paid']==1){
				echo "Yes";
				}else{
				echo "No";} ?>
			&nbsp;
		</dd>
		<h2>Shipping Info</h2>
               <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingfirstname'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingfirstname']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippinglastname'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippinglastname']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingaddress'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingaddress']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingcity'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingcity']; ?>                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingstate'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingstate']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingzip'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingzip']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingcountry'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingcountry']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shippingtelephone'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Order']['shippingtelephone']; ?>
                        &nbsp;
                </dd>
		<h2>Item Info</h2>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Item'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Item']['itemid']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Item']['price']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantity'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php echo $order['Item']['quantity']; ?>
                        &nbsp;
                </dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Shipped?'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
                        <?php if($order['Item']['shipped']=="1"){
				echo "Yes";
			}else{echo "No";}?>
                        &nbsp;
                </dd>

	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Order', true), array('action' => 'edit', $order['Order']['orderid'])); ?> </li>
		<li><?php echo $html->link(__('Delete Order', true), array('action' => 'delete', $order['Order']['orderid']), null, sprintf(__('Are you sure you want to delete # %s?', true), $order['Order']['orderid'])); ?> </li>
		<li><?php echo $html->link(__('List Orders', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Order', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
