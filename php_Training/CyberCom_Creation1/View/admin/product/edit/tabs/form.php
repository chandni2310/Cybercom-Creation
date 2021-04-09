<?php 
$sku_err=$name_err=$price_err=$discount_err=$quantity_err=$description_err=$status_err=$product_id_err='';

$product=$this->getTableRow();
// echo '<pre>';
// print_r($product);
// die();


 ?>
<div class="create_data">
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">SKU</label>
                    <input type="text" name="product[sku]" id="sku"  value="<?php echo $product->sku;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="sku_err">
                        <?php echo $sku_err;?>
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" name="product[name]" id="name"  value="<?php echo $product->name;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                        <?php echo $name_err;?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Price</label>
                    <input type="number" name="product[price]" id="price" step="0.01" min="0" max="100" value="<?php echo $product->price; ?>" class="form-control">                  
                    <div class="invalid-feedback d-block" id="price_err">
                        <?php echo $price_err;?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Discount</label>
                    <input type="number" name="product[discount]" id="discount" step="0.01" min="0" max="100" value="<?php echo $product->discount; ?>" class="form-control">                 
                    <div class="invalid-feedback d-block" id="discount_err">
                        <?php echo $discount_err;?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Quantity</label>
                    <input type="number" name="product[quantity]" id="quantity"  value="<?php echo $product->quantity;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="quantity_err">
                        <?php echo $quantity_err;?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCreated">Description</label>
                    <textarea name="description" id="product[description]" rows="3" cols="40"> <?php echo $product->description; ?></textarea>
                    <div class="invalid-feedback d-block" id="description_err" >
                        <?php echo $description_err;?>
                    </div>

                </div>
                
    
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="product[status]" class="form-control">
                        <option value="enabled" 
                        <?php if($product->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled"
                        <?php if($product->status=='disabled'){
                            echo 'selected';
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status">
                        <?php echo $status_err;?>
                    </div>

                </div>
                

                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">SAVE</button>