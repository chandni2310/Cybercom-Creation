<?php 
$billingAddress = $this->getBillingAddress();
$shippingAddress = $this->getShippingAddress();
 ?>
 <div class="create_data">
    <fieldset id= "billingAddress">
        <legend>Billing Address</legend>
         
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Address</label>
                    <input type="text" name="billingAddress[address]" id="fname"  value="<?php echo $billingAddress->address;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="fname_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">City</label>
                    <input type="text" name="billingAddress[city]" id="lname"  value="<?php echo $billingAddress->city;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">State</label>
                    <input type="text" name="billingAddress[state]" id="lname"  value="<?php echo $billingAddress->state;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Zip Code</label>
                    <input type="text" name="billingAddress[zipcode]" id="lname"  value="<?php echo $billingAddress->zipcode;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                    </div>
                </div>
                 <div class="form-group col-md-6">
                    <label for="inputName">Country</label>
                    <input type="text" name="billingAddress[country]" id="lname"  value="<?php echo $billingAddress->country;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                        
                    </div>
                </div>
                
                <input type="hidden" name="billingAddress[addressType]" value="billing">
                
        </fieldset>
        <fieldset id= "shippingAddress">
        <legend>Shipping Address</legend>
         
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Address</label>
                    <input type="text" name="shippingAddress[address]" id="fname"  value="<?php echo $shippingAddress->address;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="fname_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">City</label>
                    <input type="text" name="shippingAddress[city]" id="lname"  value="<?php echo $shippingAddress->city;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">State</label>
                    <input type="text" name="shippingAddress[state]" id="lname"  value="<?php echo $shippingAddress->state;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Zip Code</label>
                    <input type="text" name="shippingAddress[zipcode]" id="lname"  value="<?php echo $shippingAddress->zipcode;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                    </div>
                </div>
                 <div class="form-group col-md-6">
                    <label for="inputName">Country</label>
                    <input type="text" name="shippingAddress[country]" id="lname"  value="<?php echo $shippingAddress->country;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="lname_err">
                        
                    </div>
                </div>
                
                <input type="hidden" name="shippingAddress[addressType]" value="shipping">
                
        </fieldset>
</div>
        
            <center>
            <button type="submit" class="btn btn-success btn-lg" name="submit" id="create_btn">SAVE</button>
            </center> 