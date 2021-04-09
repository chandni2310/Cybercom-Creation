<?php $shippingMethods = $this->getShippingMethods(); ?>
<h3>Shipping Method</h3>
<hr>
<?php if ($shippingMethods) : ?>
    <?php foreach ($shippingMethods as $shippingMethod) : ?>
        <div>
                <input type="radio" class="form-check-input" name="shipping"  value="<?= $shippingMethod->shippingId ?>"><span>&nbsp;&nbsp;&nbsp;</span>
                <?= $shippingMethod->name ?>
                <span>&nbsp;</span>
                <?= 'Rs'.$shippingMethod->amount ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<input type="submit" value="SAVE" class="btn btn-primary" onclick="saveShipping()">
<script type="text/javascript">
    function saveShipping(){
        var form = document.getElementById('cartForm');
        form.setAttribute('Action','<?php echo $this->getUrl()->getUrl('saveShipping'); ?>');
        form.submit();
    }
    
</script>