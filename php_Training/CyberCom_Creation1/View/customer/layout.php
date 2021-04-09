<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseUrl('Skin/Admin/Css/style.css') ;?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/Js/jquery-3.6.0.js') ;?>"></script>
	<script type="text/javascript" src="<?php echo $this->baseUrl('Skin/Admin/Js/mage.js') ;?>"></script>
	<script type="text/javascript" src="<?php echo $this->baseUrl('Skin/tinymce/tinymce.min.js') ;?>"></script>
	<style type="text/css">
		body {
  width: 100%;
  height: 100%;
}

/* header */
nav {
  width: auto;
  align-items: center;
  padding: 5px;
  background-color: #03045e;
}

.nav-link {
  color: #ffffff;
  font-size: 15px;
}

.app-name {
  font-size: 30px;
  font-weight: 900;
  margin-right: 20px;
}

.nav-link:hover {
  transition: 0.4s;
  background-color: blue;
  color: white;
  font-size: 20px;
}

.input-search {
  width: max-content;
  margin-left: 30px;
}

.header--cart-account-icon {
  color: white;
  padding: 6px;
}

.header-text {
  margin-top: 10px;
  color: white;
}

/* header-parent-menu */
.header-parent-menu {
  background-color: #023e8a;
  height: max-content;
  width: auto;
}

.header-parent-menu ul li {
  list-style-type: none;
  display: inline;
  padding: 20px;
  color: #caf0f8;
  font-weight: bold;
}

.header-parent-menu ul li:hover {
  background-color: white;
  font-weight: bold;
  color: #0096c7;
}

.header-parent-child-menu {
  display: none;
}

/* attributes  */

.attribute-list dl dd ul {
  list-style-type: none;
}

.attribute-list dl dt {
  display: block;
  text-align: left;
  background-color: #91cbd6 ;
}

.attribute-list dl dd ul li input[type="checkbox"] {
  padding: 2px;
  margin-right: 5px;
  font-size: 13px;
}

/*
 category-products
 Grid Product
*/

.product-main-row{
  margin-top: 100px;
  
}

.grid-product-image{
  width: auto;
  height: max-content;
}

.grid-product-card{
  width: auto;
  height: max-content;
  margin-bottom: 20px;
}

.grid-product-name{
  font-size:20px;
}




/* footer */
footer {
  background-color: #caf0f8;
}
	</style>
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
			<td><?php echo  $this->createBlock('Block\Customer\Layout\Message')->toHtml() ?></td>
		</tr>
		<tr>
			<td>
				<?php
				//echo 'hello';
				
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
