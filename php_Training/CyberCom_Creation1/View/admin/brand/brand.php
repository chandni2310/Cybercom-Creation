<?php 
$brands = $this->getBrand();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Brand Page</title>
  
</head>
<body>
	
  <div class="content read">
	<h2>Add Brand </h2>
	
	<a href="<?php echo $this->getUrl()->getUrl('form'); ?>" class="create-contact">Add Brand</a>
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Image</th>
				<th>Status</th>
				<th>Created Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		foreach($brands as $brand){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $brand->brandId; ?></td>
			<td><?php echo $brand->name; ?></td>
			<td><?php echo $brand->image; ?></td>
      <td><?php echo $brand->status; ?></td>
			<td><?php echo $brand->createdDate; ?></td>
			<td>
				<a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['brandId'=>$brand->brandId],true);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['brandId'=>$brand->brandId],true);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
  </table>
	
</body>
</html>