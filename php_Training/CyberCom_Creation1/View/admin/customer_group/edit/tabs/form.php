<?php 
$categoryId_err=$name_err=$status_err=$description_err='';
$customerGroup = $this->getCustomerGroup();

 ?>
<div class="create_data">
                <div class="form-group col-md-12">
                    <label for="inputId"> Group Id</label>
                    <input type="hidden" name="customerGroup[groupId]" id="customer_id" value="<?php echo $customerGroup->groupId;?>"class="form-control" required  readonly   >
                    <div class="invalid-feedback d-block" id="user_idError">
                      
                    </div>
                </div>

       
                
                <div class="form-group col-md-12">
                    <label for="inputName"> Name</label>
                    <input type="text" name="customerGroup[name]" id="name"  value="<?php echo $customerGroup->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                        <?php echo $name_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCreated">Default</label>
                    <select name="customerGroup[default]" class="form-control" >
                        <option value="0"
                        <?php if($customerGroup->default=='0'){
                            echo 'selected';
                        } ?>>0</option>
                        <option value="1"
                        <?php if($customerGroup->default=='1'){
                            echo 'selected';
                        } ?>>1</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status" >
                        <?php echo $status_err;?>
                    </div>

                </div>
                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">SAVE</button>