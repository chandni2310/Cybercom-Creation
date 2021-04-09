<?php 
$collection = $this->getCollection();
$actions = $this->getActions();
$columns = $this->getColumns();
$buttons = $this->getButtons();

 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
  <div class="content read">
	<h2><?php echo $this->getTitle(); ?></h2>
  
  <?php if ($buttons): ?>
    <?php foreach($buttons as $key => $button):  ?>
          <a href="<?php echo $this->getButtonUrl( $button['method'])?>"><?php echo $button['label'];  ?></a>
  <?php endforeach; ?>
  <?php endif; ?>
	
	<table class="table table-bordered table-striped" >
		<thead>
      <tr>
        <?php if($columns): ?>
          <?php foreach($columns as $key  => $column): ?>
            <th><?php echo  $column['label'] ;?></th>

      <?php endforeach; ?>
    <?php endif; ?>
      <th>Action</th>
      </tr>
		</thead>
		<tbody>
			<?php 

		foreach($collection as $row){ ?>
      <tr>
      <?php if($columns):?>
        <?php foreach($columns as $key  => $column): ?>
        <td><?php echo  $this->getFieldValue($row,$column['field']) ;?></td>

      <?php endforeach; ?>
      <?php endif;?>
      <td>
        <?php foreach($actions as $key => $action):  ?>
          <a href="<?php echo $this->getMethodUrl($row,$action['method'])?>"><?php echo $action['label'];  ?></a>
        <?php endforeach; ?>
      </td>
      </tr>

		<?php
		 }

		?>
	</tbody>
  </table>

</div>
</form>
	
</body>
</html>

<script type="text/javascript">
  function submitForm(button){
    var form = $(button).closest('form');
    form.attr('action',"<?php echo $this->getUrl()->getUrl('filter'); ?>");
    form.submit();
  }
</script>