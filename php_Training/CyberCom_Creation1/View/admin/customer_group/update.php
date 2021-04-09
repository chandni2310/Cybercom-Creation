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
	<nav class="navtop">
    	<div>
    		<h1> Customer Group</h1>
            <a href="index.php"><i class=" fa fa-home"></i>Home</a>
    		<a href="contacts.php"><i class=" fa fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
    <div class="content update">
    <h2>Add/Update Customer Group</h2>
    <hr>
    <form action="<?php echo $this->getUrl()->getUrl('save'); ?>" method="POST">
        <?php echo $this->getTabContent(); ?>
      <?php  
       /*<div class="create_data">
        <div class="form-group col-md-12">
                    <label for="inputId"> Payment Id</label>
                    <input type="hidden" name="payment[methodId]" id="customer_id" value="<?php echo $payment->methodId;?>"class="form-control" required readonly    >
                    <div class="invalid-feedback d-block" id="user_idError">
                      <?php echo $product_id_err;?>
                    </div>
                </div> 
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Code</label>
                    <input type="text" name="payment[code]" id="sku"  value="<?php echo $payment->code;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="sku_err">
                        <?php echo $sku_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="payment[name]" id="name"  value="<?php echo $payment->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                        <?php echo $name_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCreated">Description</label>
                    <textarea name="payment[description]" id="payment[description]" rows="3" cols="40"> <?php echo $payment->description; ?></textarea>
                    <div class="invalid-feedback d-block" id="description_err" >
                        <?php echo $description_err;?>
                    </div>

                </div>
                
    
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="payment[status]" class="form-control">
                        <option value="enabled" 
                        <?php if($payment->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled"
                        <?php if($payment->status=='disabled'){
                            echo 'selected';
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status">
                        <?php echo $status_err;?>
                    </div>

                </div>
                

                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="save" id="create_btn">SAVE</button> */?>
    </form>
    
</div>

</body>
</html>