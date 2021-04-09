<?php $cartBillingAddress = $this->getCartBillingAddress(); ?>

<?php $cartShippingAddress = $this->getCartShippingAddress(); ?>
<div class="row mt-5 ">

    <div class="col">
        <h3>Billing Address</h3>
        <hr>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="billing[address]" rows="4"> <?= $cartBillingAddress->address ?></textarea>
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="billing[city]"  value="<?= $cartBillingAddress->city ?>">
        </div>
         <div class="form-group">
            <label>State</label>
            <input type="text" class="form-control" name="billing[state]"  value="<?= $cartBillingAddress->state ?>">
        </div>
        <div class="form-group">
            <label>Zipcode</label>
            <input type="text" class="form-control" name="billing[zipcode]"  value="<?= $cartBillingAddress->zipcode ?>">
        </div>
        <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" name="billing[country]"  value="<?= $cartBillingAddress->country ?>">
        </div>
        
        <div>
            <input type="checkbox" name="saveBillingInAddressBook"> Save in Address Book
            <input type="submit" value="SAVE" class="btn btn-primary" onclick="saveBillingAddress();">

        </div>
    </div>

    <div class="col">
        <h3>Shipping Address</h3>
        <hr>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="shipping[address]"  rows="4"> <?= $cartShippingAddress->address ?></textarea>
        </div>
         <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="shipping[city]"  value="<?= $cartShippingAddress->city ?>">
        <div class="form-group">
            <label>State</label>
            <input type="text" class="form-control" name="shipping[state]"  value="<?= $cartShippingAddress->state ?>">
        </div>
        <div class="form-group">
            <label>Zipcode</label>
            <input type="text" class="form-control" name="shipping[zipcode]"  value="<?= $cartShippingAddress->zipcode ?>">
        </div>
        <div class="form-group">
            <label>Country</label>
            <input type="text" class="form-control" name="shipping[country]"  value="<?= $cartShippingAddress->country ?>">
        </div>

       
        </div>
       

        
        <div>
            <input type="checkbox" name="sameAsBillingAddress">Same As Billing Address
            <input type="checkbox" name="saveShippingAddressInAddressBook"> Save in AddressBook
            <input type="submit" value="SAVE" class="btn btn-primary" onclick="saveShippingAddress();">
        </div>
    </div>
</div>

<script type="text/javascript">
    function saveBillingAddress(){
        var form = document.getElementById('cartForm');
        form.setAttribute('Action','<?php echo $this->getUrl()->getUrl('saveBillingAddress'); ?>');
        form.submit();
    }
    function saveShippingAddress(){
        var form = document.getElementById('cartForm');
        form.setAttribute('Action','<?php echo $this->getUrl()->getUrl('saveShippingAddress'); ?>');
        form.submit();
    }
</script>