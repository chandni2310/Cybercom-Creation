<?php 
//in product attribute
$attributes = $this->getAttributes();


 ?>

<?php if($attributes): ?>
	<?php foreach ($attributes as $attribute) {
		$show = \Mage::getBlock('Block\Admin\Attribute\Show');
		$show->setEntity($this->getTableRow());
		$show->setAttribute($attribute);
		echo $show->toHtml();
	} ?>
	<button type="submit" class="btn btn-success" onclick="submitForm(this)">SAVE</button>
<?php endif; ?>


<script type="text/javascript">
	function submitForm(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('save','product_Attribute'); ?>");
		form.submit();
	}

</script>