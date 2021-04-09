<?php 

$name=$status=$description='';
$name_err=$status_err=$description_err='';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navtop">
    	<div>
    		<h1>Category</h1>
            <a href="index.php"><i class=" fa fa-home"></i>Home</a>
    		<a href="contacts.php"><i class=" fa fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
    <div class="content update">
	<h2>Add Category</h2>
	<hr>
    <form action="<?php echo $this->getUrl('save');?>" method="post">
       <div class="create_data">
				
				<div class="form-group col-md-12">
				    <label for="inputName"> Name</label>
				    <input type="text" name="category[name]" id="name"  value="<?php echo $name;?>" class="form-control">
				    <div class="invalid-feedback d-block" id="name_err">
				    	<?php echo $name_err;?>
				    </div>
				</div>
				
				<div class="form-group col-md-6">
				    <label for="inputCreated">Status</label>
				    <select name="category[status]" class="form-control" value="<?php echo $status;?>">
				    	<option value="enabled">Enabled</option>
				    	<option value="disabled">Disabled</option>
				    </select>
				    <div class="invalid-feedback d-block" id="status" >
				    	<?php echo $status_err;?>
				    </div>

				</div>
				<div class="form-group col-md-6">
				    <label for="inputCreated">Description</label>
				    <textarea name="category[description]" id="description" rows="3" cols="40"></textarea>
				    <div class="invalid-feedback d-block" id="description_err" >
				    	<?php echo $description_err;?>
				    </div>

				</div>
				

			</div>
			<button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Create</button>
    </form>
    
</div>



</body>
</html>
