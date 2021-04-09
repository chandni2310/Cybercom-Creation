<?php 
$categorys=$this->getCategory();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Category Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

    <div class="content read">
	<h2>Add Category</h2>
	
	<a href="<?php echo $this->getUrl()->getUrl('form');	 ?>" class="create-contact">Add Category</a>
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Description</th>
				<th>Status</th>
				<th>Parent id</th>
				<th>Path ID</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		foreach($categorys as $category){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $category->categoryId; ?></td>
			<td><?php echo $this->getName($category); ?></td>
			<td><?php echo $category->description; ?></td>
			<td><?php echo $category->status; ?></td>
			<td><?php echo $category->parentId ?></td>
			<td><?php echo $category->pathId ?></td>

			<td>
				<a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['categoryId'=>$category->categoryId],true);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['categoryId'=>$category->categoryId]);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
	</table>

	
</body>
</html>