<?php 
$admins=$this->getAdmin();
/*echo '<pre>';
print_r($customers);
die();
*/
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin Page</title>
	
</head>
<body>

    <div class="content read">
	<h2>Add Admin</h2>
	
	<a href="http://localhost/php_Training/Cybercom_Creation1/index.php?c=admin&a=form" class="create-contact">Add Admin</a>
 
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>UserName</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
      //echo '<pre>';
      //print_r($products);
      //die();
		foreach($admins as $admin){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $admin->adminId; ?></td>
			<td><?php echo $admin->userName; ?></td>
			<td><?php echo $admin->status; ?></td>
			<td>
				<a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['adminId'=>$admin->adminId],true);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['adminId'=>$admin->adminId]);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
  </table>
	
</body>
</html>