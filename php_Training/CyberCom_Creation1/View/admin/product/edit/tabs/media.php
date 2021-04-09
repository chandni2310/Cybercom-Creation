<div class="create_data">
	<div class="float-right mb-2 mr-2">
		<button type="submit" onclick="submitForm(this)" class="btn btn-success text-left">UPDATE</button>
		<button type="submit" onclick="removeImage(this)" class="btn btn-success text-left">REMOVE</button>

	</div>
	<h2>Media Details</h2>
	<?php $images = $this->getImage();
	
	if(!empty($images)): ?>
		<table class="table table-hover">
			<thead>
				<tr class="text-center">
					<th scope="row" style="white-space: nowrap;">Image</th>
					<th>label</th>
					<th>Small</th>
					<th>Thumbnail</th>
					<th>Base</th>
					<th>Gallery</th>
					<th>Remove</th>
					
				</tr>
			</thead>
			<tbody>
				<?php $gallery = $this->getGalleryOption(); ?>
				<?php foreach ($images as $image):?>
					
					<tr class="text-center">
						<th scope="row" style="white-space: nowrap;" ><img src="Image/Product/<?php echo $image->image ; ?> " style="height:100px; width: 100px" alt=""></th>
						<th><input type="text" name="image[data][<?php echo $image->imageId ?>][label]" value="<?php echo $image->label ?>" ></th>
						<th><input type="radio" name="image[data2][small]"  value="<?php echo $image->imageId ?>" <?php echo ($image->small =='1')? 'checked':''; ?>></th>
						<th><input type="radio" name="image[data2][thumb]" value="<?php echo $image->imageId ?>" <?php echo ($image->thumb =='1')? 'checked':''; ?>></th>
						<th><input type="radio" name="image[data2][base]" value="<?php echo $image->imageId ?>" <?php echo ($image->base =='1')? 'checked':''; ?>></th>
						<th><input type="checkbox" name="image[data][<?php echo $image->imageId ?>][gallery]" value="<?php echo $image->imageId ?>" <?php  if(in_array($image->imageId,$gallery)) echo 'checked'; ?> ></th>
						<th><input type="checkbox" name="image[remove][<?php echo $image->imageId ?>]" value="<?php echo $image->imageId ?>"></th>
					</tr>
				<?php endforeach; ?>
				<?php else: ?>
					<?php echo '<p class="text-center"><b>No Image Found</b></p>' ?>
				<?php endif; ?>
			</tbody>
	</table>
	<input type="file" name="photo"><br>
	<button type="submit" onclick="submitImage(this)" class="btn btn-success text-left">UPLOAD</button>	

</div>
<script type="text/javascript">
	function submitForm(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('save','ProductMedia'); ?>");
		form.submit();
	}

	function submitImage(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('save','ProductMedia'); ?>");
		form.submit();
	}

	function removeImage(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('delete','ProductMedia'); ?>");
		form.submit();
	}
</script>