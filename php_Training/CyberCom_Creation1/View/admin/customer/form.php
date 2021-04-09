<?php 
$fname=$lname=$phone=$email=$password=$status='';	
			$fname_err=$lname_err=$phone_err=$email_err=$password_err=$status_err='';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navtop">
    	<div>
    		<h1>Customer</h1>
            <a href="index.php"><i class=" fa fa-home"></i>Home</a>
    		<a href="contacts.php"><i class=" fa fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
    <div class="content update">
	<h2>Add Customer</h2>
	<hr>
    <form action="<?php echo $this->getUrl('save');?>" method="post">
       <div class="create_data">
				
				<div class="form-group col-md-6">
				    <label for="inputName">First Name</label>
				    <input type="text" name="customer[firstName]" id="fname"  value="<?php echo $fname;?>" class="form-control">
				    <div class="invalid-feedback d-block" id="fname_err">
				    	<?php echo $fname_err;?>
				    </div>
				</div>
				<div class="form-group col-md-6">
				    <label for="inputName">Last Name</label>
				    <input type="text" name="customer[lastName]" id="lname"  value="<?php echo $lname;?>" class="form-control">
				    <div class="invalid-feedback d-block" id="lname_err">
				    	<?php echo $lname_err;?>
				    </div>
				</div>
				<div class="form-group col-md-6">
				    <label for="inputPhone">Phone</label>
				    <input type="number" name="customer[mobile]" id="phone"  value="<?php echo $phone;?>" class="form-control">
				    <div class="invalid-feedback d-block" id="phone_err">
				    	<?php echo $phone_err;?>
				    </div>
				</div>
				<div class="form-group col-md-6">
				    <label for="inputEmail">Email</label>
				    <input type="email" name="customer[email]" id="email"  value="<?php echo $email;?>" class="form-control">
				    <div class="invalid-feedback d-block" id="email_err">
				    	<?php echo $email_err;?>
				    </div>
				</div>
				
				<div class="form-group col-md-6">
				    <label for="inputTitle">Password</label>
				    <input type="password" name="customer[password]" id="password"  value="<?php echo $password;?>" class="form-control">
				    <div class="invalid-feedback d-block" id="password_err">
				    	<?php echo $password_err;?>
				    </div>
				</div>
				<div class="form-group col-md-6">
				    <label for="inputCreated">Status</label>
				    <select name="customer[status]" class="form-control">
				    	<option value="enabled">Enabled</option>
				    	<option value="disabled">Disabled</option>
				    </select>
				    <div class="invalid-feedback d-block" id="status">
				    	<?php echo $status_err;?>
				    </div>

				</div>
				

			</div>
			<button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Create</button>
    </form>
    
</div>



</body>
</html>
