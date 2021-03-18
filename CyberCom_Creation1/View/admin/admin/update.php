<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navtop">
    	<div>
    		<h1>Admin</h1>
           
    	</div>
    </nav>
    <div class="content update">
    <h2>Add/Update Admin</h2>
    <hr>
    <form action="<?php  echo $this->getUrl()->getUrl('save', NULL) ?>" method="post">
        <?php echo $this->getTabContent(); ?>

        <?php 
      
       /*<div class="create_data">
         <div class="form-group col-md-12">
                    <label for="inputId"> Admin Id</label>
                    <input type="text" name="admin[adminId]" id="customer[customerId]" value="<?php echo $admin->adminId;?>"class="form-control" required readonly    >
                    <div class="invalid-feedback d-block" id="user_idError">
                      <?php echo $customer_id_err;?>
                    </div>
                </div>
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">User Name</label>
                    <input type="text" name="admin[userName]" id="fname"  value="<?php echo $admin->userName;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="fname_err">
                        <?php echo $fname_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputTitle">Password</label>
                    <input type="password" name="admin[password]" id="password"  value="<?php echo $admin->password;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="password_err">
                        <?php echo $password_err;?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="admin[status]" class="form-control">
                        <option value="enabled" 
                        <?php if($admin->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled" 
                        <?php if($admin->status=='disabled'){
                            echo 'selected'; ;
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status">
                        <?php echo $status_err;?>
                    </div>


                </div>
                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Update</button>  */?>
    </form>
    
</div>

</body>
</html>