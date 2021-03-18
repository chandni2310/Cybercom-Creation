<?php 
/*$categoryId_err=$name_err=$status_err=$description_err='';
$category = $this->getCategory();*/
/*print_r($category);
die();*/
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
	<nav class="navtop">
    	<div>
    		<h1>Category</h1>
            <a href="index.php"><i class=" fa fa-home"></i>Home</a>
    		<a href="contacts.php"><i class=" fa fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
    <div class="content update">
    <h2>Update Category</h2>
    <hr>
    <form action="<?php  echo $this->getUrl()->getUrl('save', NULL) ?>" method="post">
        <?php echo $this->getTabContent(); ?>
       
        <?php /* 

       <div class="create_data">
         <div class="form-group col-md-12">
                    <label for="inputId"> Category Id</label>
                    <input type="text" name="category[categoryId]" id="category_id" value="<?php echo $category->categoryId;?>"class="form-control" required readonly    >
                    <div class="invalid-feedback d-block" id="user_idError">
                      <?php echo $categoryId_err;?>
                    </div>
                </div>
       
                
                <div class="form-group col-md-12">
                    <label for="inputName"> Name</label>
                    <input type="text" name="category[name]" id="name"  value="<?php echo $category->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                        <?php echo $name_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="category[status]" class="form-control" >
                        <option value="enabled"
                        <?php if($category->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled"
                        <?php if($category->status=='disabled'){
                            echo 'selected';
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status" >
                        <?php echo $status_err;?>
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="inputCreated">Description</label>
                    <textarea name="category[description]" id="description" rows="3" cols="40" ><?php echo $category->description; ?></textarea>
                    <div class="invalid-feedback d-block" id="description_err" >
                        <?php echo $description_err;?>
                    </div>

                </div>

                </div>
                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Update</button>*/?>
    </form>
    
</div>

</body>
</html>