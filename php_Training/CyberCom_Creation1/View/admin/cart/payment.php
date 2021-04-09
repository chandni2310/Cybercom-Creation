<?php $paymentMethods = $this->getPaymentMethods(); ?>
<h3>Payment Method</h3>
<hr>
<?php if ($paymentMethods) : ?>
     <?php foreach ($paymentMethods as $paymentMethod) : ?>
        <div>
                <input type="radio" class="form-check-input" name="payment"  value="<?= $paymentMethod->methodId ?>"><span>&nbsp;&nbsp;&nbsp;</span>
                <?= $paymentMethod->name ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<input type="submit" value="SAVE" class="btn btn-primary" onclick="savePayment()">

<script type="text/javascript">
    function savePayment(){
        var form = document.getElementById('cartForm');
        form.setAttribute('Action','<?php echo $this->getUrl()->getUrl('savePayment'); ?>');
        form.submit();
    }
    
</script>