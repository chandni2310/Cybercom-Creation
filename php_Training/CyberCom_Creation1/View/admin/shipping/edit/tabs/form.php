<?php 
$sku_err=$name_err=$price_err=$discount_err=$quantity_err=$description_err=$status_err=$product_id_err='';
$shipping = $this->getTableRow();

 ?>

 <div class="create_data">
    
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Code</label>
                    <input type="text" name="shipping[code]" id="sku"  value="<?php echo $shipping->code;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="sku_err">
                        <?php echo $sku_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="shipping[name]" id="name"  value="<?php echo $shipping->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                        <?php echo $name_err;?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Amount</label>
                    <input type="number" name="shipping[amount]" id="sku"  value="<?php echo $shipping->amount;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="sku_err">
                        <?php echo $sku_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCreated">Description</label>
                    <textarea name="shipping[description]" id="description" rows="3" cols="40"> <?php echo $shipping->description; ?></textarea>
                    <div class="invalid-feedback d-block" id="description_err" >
                        <?php echo $description_err;?>
                    </div>

                </div>
                
    
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="shipping[status]" class="form-control">
                        <option value="enabled" 
                        <?php if($shipping->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled"
                        <?php if($shipping->status=='disabled'){
                            echo 'selected';
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status">
                        <?php echo $status_err;?>
                    </div>

                </div>
                

                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="save" id="create_btn">SAVE</button> 