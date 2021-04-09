<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Home</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Font awesome -->
    <link href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/font-awesome.css')?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/bootstrap.css')?>" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/jquery.smartmenus.bootstrap.css')?>" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/jquery.simpleLens.css')?>">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/slick.css')?>">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/nouislider.css')?>">
    <!-- Theme color -->
    <link id="switcher" href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/theme-color/default-theme.css')?>" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/sequence-theme.modern-slide-in.css')?>" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="<?php echo $this->getUrl()->baseUrl('Skin/Customer/css/style.css')?>" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseUrl('Skin/Admin/Css/style_1.css') ;?>">
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
			<td><?php echo  $this->createBlock('Block\Admin\Layout\Message')->toHtml() ?></td>
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
