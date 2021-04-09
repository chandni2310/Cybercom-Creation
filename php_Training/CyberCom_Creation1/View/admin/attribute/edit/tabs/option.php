<?php 
$attribute = $this->getAttribute();
/*echo '<pre>';
print_r($attribute->getOptions());*/
 ?>
<button type="submit" name="update" onclick="submitForm(this)" value="update">UPDATE</button>
<table id="existingOption">
	<tr>
		<td></td>
		<td></td>
		<td><button type="button" name="addOption" onclick="addRow()">ADD OPTION</button></td>
	</tr>
	<tbody id="#exitsTableBody">
	<?php foreach ($attribute->getOptions() as $key =>$option ): ?>
		
	<tr>
		<td> <input type="text" name="option[exists][<?php echo $option->optionId ;?>][name]" value="<?php echo $option->name; ?>"></td>
		<td><input type="text" name="option[exists][<?php echo $option->optionId ;?>][sortOrder]" value="<?php echo $option->sortOrder; ?>"></td>
		<td><button type="button" name="removeOption" onclick="removeRow(this)">REMOVE OPTION</button></td>
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
			<td> <input type="text" name="new[name][]" value="<?php //echo $option->name; ?>"></td>
			<td><input type="text" name="new[sortOrder][]" value="<?php //echo $option->sortOrder; ?>"></td>
			<td><button type="submit" name="removeOption" onclick="removeRow(this)">REMOVE OPTION</button></td>

		</tr>
	</tbody>
	</table>
</div>

<script type="text/javascript">
	function submitForm(button){
		var form = $(button).closest('form');
		form.attr('action',"<?php echo $this->getUrl()->getUrl('save','attribute_Option'); ?>");
		form.submit();
	}

	function removeRow(button){
		var objTr = $(button).closest('tr');
		objTr.remove();

	}
	/*function addRow(button){
		var newOptionTable = document.getElementById('newOption');
		var existingOptionTable = document.getElementById('existingOption').children[1];
		console.log(existingOptionTable);

		existingOptionTable.prepend(newOptionTable.children[0].children[0].cloneNode(true));

	}*/
	function addRow(){

		var row =  '<tr> <td><input type="text" name="option[new][name][]" ></td> <td><input type="text" name="option[new][sortOrder][]"></td>   <td><button type="submit" name="removeOption" onclick="removeRow(this)">REMOVE OPTION</button></td></tr>';
    $("#existingOption").append(row);
	}
</script>