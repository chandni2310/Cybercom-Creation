<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseUrl('Skin/Admin/Css/style.css') ;?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/Js/jquery-3.6.0.js') ;?>"></script>
	<script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/Js/mage.js') ;?>"></script>
	<script type="text/javascript" src="<?php echo $this->baseUrl('Skin/tinymce/tinymce.min.js') ;?>"></script>
</head>
<body>
	<table border="1" width="100%">
	<tbody>
		<tr>
			<td>
				<?php
				
				$header= $this->getChild('header');
				echo $header->toHtml();  
				 ?>
			</td>
			
			
		</tr>
		<tr>
			<td><?php echo  $this->createBlock('Block\Core\Layout\Message')->toHtml() ?></td>
		</tr>
		<tr>
			<td>
				<?php
				//echo '<pre>';
				
				$content = $this->getChild('content');
				echo  $content->toHtml();  
				 ?>
			</td> 			
 			
		</tr>
		<tr>
			<td  >
				<?php
				//echo '<pre>';
				
				$header= $this->getChild('footer');
				echo $header->toHtml();  
				 ?>
			</td>
			
			
		</tr>

	</tbody>
</table>

</body>
</html>
