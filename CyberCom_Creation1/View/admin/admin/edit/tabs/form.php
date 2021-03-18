<?php 
$admin = $this->getTableRow();
 ?>
<div class="create_data">
         
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">User Name</label>
                    <input type="text" name="admin[userName]" id="fname"  value="<?php echo $admin->userName;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="fname_err">
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputTitle">Password</label>
                    <input type="password" name="admin[password]" id="password"  value="<?php echo $admin->password;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="password_err">
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
                    </div>


                </div>
                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">Update</button>