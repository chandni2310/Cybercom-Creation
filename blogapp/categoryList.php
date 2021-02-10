<?php 

require 'connection.php';

$sql='select * from category';
$result=mysqli_query($conn,$sql);


 ?>
<!DOCTYPE html>

<html>
<head>
	<title>Category List page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navtop">
	<div>
		<a href="categoryList.php">Manage Category</a>
    	<a href="">My Profile</a>
    	<a href="logout.php">Log Out</a>
    		
	</div>

</nav>
<div class="content read">
	<h2>Blog category</h2>
	<hr>
	<a href="addCategory.php" class="create-contact">Add Category</a>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Category Id</th>
				<th>Category Image</th>
				<th>Category Name</th>
				<th>Created Date</th>
				<th colspan="2">Actions</th>
				
			</tr>
		</thead>
		<tbody>
			
		
		<?php 
		while($row=mysqli_fetch_array($result)){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo "<img src='images/".$row['Image']."' height = '50px' width = '50px'>"; ?></td>
			<td><?php echo $row['Category']; ?></td>
			
			<td><?php echo $row['CreatedAt']; ?></td>
			<td>
				<a href="<?php echo 'update.php?id='.$row['id'];?>" class="btn btn-primary">Edit</a>
				<button type="button" class="btn btn-danger" onclick="delete_data(<?php echo $row['id'];?>)">Delete</button>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
		
	</table>


	<script type="text/javascript">
	function delete_data(id){
		//alert(id);
		//var id=id;
		
		$.ajax({
			url:'delete.php',
			type:'post',
			data:{delete_id:id},
			success:function(data){
				 $('#tr_'+id).hide('1000');
				
			}

		});
	
		//jQuery('#tr_'+id).hide();
	}
</script>
</body>

</body>
</html>