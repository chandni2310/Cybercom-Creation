<?php 
$brand = $this->getTableRow();
 ?>
<div class="create_data">
         
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Brand Name</label>
                    <input type="text" name="brand[name]" id="fname"  value="<?php echo $brand->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="fname_err">
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputTitle">Brand Image</label>
                    <input type="file" name="image" id="password"  value="<?php echo $brand->image;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="password_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="brand[status]" class="form-control">
                        <option value="enabled" 
                        <?php if($brand->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled" 
                        <?php if($brand->status=='disabled'){
                            echo 'selected'; ;
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status">
                    </div>


                </div>
                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Update</button>