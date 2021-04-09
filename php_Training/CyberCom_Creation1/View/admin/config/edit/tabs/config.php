<?php 
$configGroup = $this->getConfigGroup();



 ?>
<button type="submit" name="update" onclick="submitForm(this)" value="update">UPDATE</button>
<table id="existingConfig">
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td><button type="button" name="addConfiguration" onclick="addRow()">ADD Configuration</button></td>
	</tr>
	<tbody id="#exitsTableBody">
	<?php foreach ($configGroup->getConfig() as $key =>$config ): ?>
		
	<tr>
		<td> <input type="text" name="config[exists][<?php echo $config->configId ;?>][title]" value="<?php echo $config->title; ?>"></td>
		<td> <input type="text" name="config[exists][<?php echo $config->configId ;?>][code]" value="<?php echo $config->title; ?>"></td>
		<td> <input type="text" name="config[exists][<?php echo $config->configId ;?>][value]" value="<?php echo $config->value; ?>"></td>
		<td><button type="button" name="removeOption" onclick="removeRow(this)">Remove Configuration</button></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	

	
</table>
<br>
<br>
<div style="display: none;">
	<table >
		<tbody id="newOption">
		<tr>
			<td> <input type="text" name="new[title][]" value="<?php //echo $option->name; ?>"></td>
			<td><input type="text" name="new[code][]" value="<?php //echo $option->sortOrder; ?>"></td>
			<td><input type="text" name="new[value][]" value="<?php //echo $option->sortOrder; ?>"></td>
			<td><button type="submit" name="removeOption" onclick="removeRow(this)">REMOVE OPTION</button></td>

		</tr>
	</tbody>
	</table>
</div>

<script type="text/javascript">
	function submitForm(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('save','config_Group'); ?>");
		form.submit();
	}

	function removeRow(button){
		var objTr = $(button).closest('tr');
		objTr.remove();

	}
	
	function addRow(){

		var row =  '<tr> <td><input type="text" name="config[new][title][]" ></td> <td><input type="text" name="config[new][code][]"></td>  <td><input type="text" name="config[new][value][]"></td>   <td><button type="submit" name="removeOption" onclick="removeRow(this)">REMOVE OPTION</button></td></tr>';
    $("#existingConfig").append(row);
	}
</script>