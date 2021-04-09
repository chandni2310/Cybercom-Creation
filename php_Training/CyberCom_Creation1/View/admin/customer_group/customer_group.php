<?php 
$customerGroups=$this->getCustomerGroup();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Group Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

    <div class="content read">
	<h2>Add Customer Group</h2>
	
	<a href="<?php echo $this->getUrl()->getUrl('form',null,null,true);	 ?>" class="create-contact">Add Customer Group</a>
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Default</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		foreach($customerGroups as $customerGroup){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $customerGroup->groupId; ?></td>
			<td><?php echo $customerGroup->name; ?></td>
			<td><?php echo $customerGroup->default; ?></td>
			<td>
				<a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['groupId'=>$customerGroup->groupId]);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['groupId'=>$customerGroup->groupId]);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
	</table>

	
</body>
</html>