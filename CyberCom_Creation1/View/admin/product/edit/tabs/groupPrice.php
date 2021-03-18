<?php 

$products = $this->getTableRow();
$customerGroups = $this->getCustomerGroups();
//print_r($customerGroups);

 ?>
 <button type="submit" onclick="submitForm(this)" class="btn btn-success text-left">UPDATE</button>

 <table class="table table-hover">
 	<thead>
 		<tr class="text-center">
 		<th>Group Id</th>
 		<th>Group Name</th>
 		<th>Price</th>
 		<th>Group Price</th>
 		</tr>
 	</thead>
 	<tbody>
 		
 		<?php foreach ($customerGroups as $customerGroup) :?>
 			<?php $rowStatus = ($customerGroup->entityId)? 'exist':'new' ;?>
 			<tr >
 				<td><?php echo $customerGroup->groupId; ?></td>
 				<td><?php echo $customerGroup->name ?></td>
 				<td><?php echo $customerGroup->price ?></td>
 				<td><input type="text" name="groupPrice[<?php echo $rowStatus ; ?>][<?php echo $customerGroup->groupId; ?>]" value="<?php echo $customerGroup->groupPrice ?>"></td>
 			</tr>
 		<?php endforeach; ?>
 		
 	</tbody>

 	

 </table>
 <script type="text/javascript">
	function submitForm(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('save','product_GroupPrice'); ?>");
		form.submit();
	}
</script>

	
