<?php 

$payment = $this->getTableRow();

 ?>

<div class="create_data">
        
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Code</label>
                    <input type="text" name="payment[code]" id="sku"  value="<?php echo $payment->code;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="sku_err">
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="payment[name]" id="name"  value="<?php echo $payment->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputCreated">Description</label>
                    <textarea name="payment[description]" id="payment[description]" rows="3" cols="40"> <?php echo $payment->description; ?></textarea>
                    <div class="invalid-feedback d-block" id="description_err" >
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
                    </div>

                </div>
                

                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="save" id="create_btn">SAVE</button> 