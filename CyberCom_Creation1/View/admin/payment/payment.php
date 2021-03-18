<?php 
$payments=$this->getPayment();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Payment Page</title>
</head>
<body>
	
	<h2>Add Payment Method</h2>
	
	<a href="http://localhost/php_Training/Cybercom_Creation1/index.php?c=payment&a=form" class="create-contact">Add Payment Method</a>
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Code</th>
				<th>Description</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
      //echo '<pre>';
      //print_r($products);
      //die();
		foreach($payments as $payment){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $payment->methodId; ?></td>
			<td><?php echo $payment->name; ?></td>
			<td><?php echo $payment->code; ?></td>
			<td><?php echo $payment->description; ?></td>
			<td><?php echo $payment->status; ?></td>
			<td>
				<a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['methodId'=>$payment->methodId],true);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['methodId'=>$payment->methodId]);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
  </table>
	
</body>
</html>