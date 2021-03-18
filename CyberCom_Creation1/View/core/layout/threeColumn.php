<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseUrl('Skin/tinymce/tinymce.min.js') ;?>"></script>
</head>
<body>
	<table border="1" width="100%">
	<tbody>
		<tr>
			<td colspan="2">
				<?php echo $this->getChild('header')->toHtml();?>
			</td>
			
			
		</tr>
		<tr>
			<td width="100px" height="500px">
				<?php echo $this->getChild('left')->toHtml();?>
			</td>
			<td>
				<?php echo $this->getChild('content')->toHtml();?>
			</td> 			
			
 			
		</tr>
		<tr>
			<td colspan="2" >
				<?php echo $this->getChild('footer')->toHtml();?>
			</td>
			
			
		</tr>

	</tbody>
</table>

</body>
</html>
