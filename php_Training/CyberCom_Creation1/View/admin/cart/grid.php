<?php 
$cart = $this->getCart();
$cartItems = $this->getCart()->getItems();
$cartCustomer = $this->getCart()->getCustomer();
$customers = $this->getCustomers();

?>
	
<div class="content read">
  <a href="<?php echo $this->getUrl()->getUrl('addToCart')?>">Back To Item</a>
  <form method="POST" id="cartForm" action="<?php echo $this->getUrl()->getUrl('update'); ?>">
    <button type="submit">UPDATE CART</button>
    <br>
    <?php if ($customers): ?>
    	<label>Customer</label>
    	<select class="form-control" name="customerId" >
    	 <?php foreach ($customers as $customer) : ?>
                <option value="<?php  echo $customer->customerId ?>" ><?= "$customer->firstName $customer->lastName" ?></option>
                <?php endforeach; ?>
                <option>Select Customer</option>	
    	</select>
	<?php endif; ?>
	<input type="submit" name="SELECT" onclick="selectCustomer();" value="SELECT">

	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>Cart Id</th>
				<th>Product Id</th>
				<th>Price</th>
        		<th>Quantity</th>
				<th>Discount</th>
				<th>Total Price </th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		    foreach($cartItems as $item){
		  ?>
		<tr>
			<td><?php echo $item->cartItemId; ?></td>
			<td><?php echo $item->productId; ?></td>
			<td><?php echo $item->basePrice; ?></td>
      <td><input type="number" name="quantity[<?php echo $item->cartItemId ?>]" value="<?php echo $item->quantity; ?>"></td>
      <td><?php echo $item->discount; ?></td>
			<td><?php echo ($item->quantity * $item->basePrice); ?></td>
			<td>
				
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['cartId'=>$item->cartId],true);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
  </table>

	
</div>
<div class="container">
	<?php echo $this->createBlock('Block\Admin\Cart\Address')->setCart($cart)->toHtml();?>
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<?php echo $this->createBlock('Block\Admin\Cart\Payment')->toHtml(); ?>
		</div>
		<br>
		<div class="col">
			<?php echo $this->createBlock('Block\Admin\Cart\Shipping')->toHtml(); ?>
		</div>
		
	</div>
	<div class="row">
		<div class="col">
			<?php echo $this->createBlock('Block\Admin\Cart\Order')->toHtml(); ?>
		</div>
		
	</div>
	<center>
			<input type="submit" name="placeOrder" class="btn btn-success" onclick="order();" value="PLACE ORDER">
	</center>
</div>
</form>

<script type="text/javascript">
	function selectCustomer(){
		var form = document.getElementById('cartForm');
		form.setAttribute('Action','<?php echo $this->getUrl()->getUrl('selectCustomer'); ?>');
		form.submit();
	}
	function order(){
		//alert('11');
		var form = document.getElementById('cartForm');
		form.setAttribute('Action','<?php echo $this->getUrl()->getUrl('placeOrder','cart',['customerId'=>$cart->customerId]); ?>');
		form.submit();
	}
</script>
