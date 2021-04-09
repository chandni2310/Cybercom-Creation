<?php
$categoryId_err=$name_err=$status_err=$description_err='';
$category = $this->getTableRow();
$categories = $this->getParentOptions();
/*print_r($category);
die();*/
?>

            
                    
    
<div class="create_data">
   


        
         <div class="form-group col-md-12">
                <label for="parent-category">Parent Category</label>
                <select class="form-control" name="category[parentId]" id="" class="form-control">
                    <option value="0">--</option>
                    <?php if($categories): ?>
                    <?php foreach ($categories as $categoryId =>$name): ?>
                        <option value="<?php echo $categoryId; ?>"<?php if($categoryId == $category->parentId): ?> selected <?php endif; ?>><?php echo $name; ?></option>

                    <?php endforeach; ?>
                <?php endif;  ?>
                </select>
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
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Update</button>