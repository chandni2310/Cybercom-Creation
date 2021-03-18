<?php 
$products=$this->getProducts();

/*$url = new Model_Core_Url();
print_r($url);
die();*/


 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Product Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <style type="text/css">
		* {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
  	
}
body {
  	background-color: #FFFFFF;
  	margin: 0;
}
.navtop {
  	background-color: #3f69a8;
  	height: 60px;
  	width: 100%;
  	border: 0;
}
.navtop div {
  	display: flex;
  	margin: 0 auto;
  	width: 1000px;
  	height: 100%;
}
.navtop div h1, .navtop div a {
  	display: inline-flex;
  	align-items: center;
}
.navtop div h1 {
  	flex: 1;
  	font-size: 24px;
  	padding: 0;
  	margin: 0;
  	color: #ecf0f6;
  	font-weight: normal;
}
.navtop div a {
  	padding: 0 20px;
  	text-decoration: none;
  	color: #c5d2e5;
  	font-weight: bold;
}
.navtop div a i {
  	padding: 2px 8px 0 0;
}
.navtop div a:hover {
  	color: #ecf0f6;
}

.content h2{
  font-weight: bold
  margin: 0 auto;
}

.content{
      margin: 0 auto;

}.read h2{
  //padding: 10px 15px;
  margin: 15px 15px;

}

.read .create-contact {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 2px 10px;
}
.read .create-contact:hover {
    background-color: blue;
} 
.read .create-contact {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 2px 10px;
}
.read .create-contact:hover {
    background-color: blue;
} 

.read table {
    width: 100%;
    padding-top: 30px;
    border-collapse: collapse;
}
.read table thead {
    background-color: #ebeef1;
    border-bottom: 1px solid #d3dae0;
}
.read table thead td {
    padding: 10px;
    font-weight: bold;
    color: #767779;
    font-size: 14px;
}
.read table tbody tr {
    border-bottom: 1px solid #d3dae0;
}
.read table tbody tr:nth-child(even) {
    background-color: #fbfcfc;
}
.read table tbody tr:hover {
    background-color: #376ab7;
}
.read table tbody tr:hover td {
    color: #FFFFFF;
}
.read table tbody tr:hover td:nth-child(1) {
    color: #FFFFFF;
}
.read table tbody tr td {
    padding: 10px;
}
.read table tbody tr td:nth-child(1) {
    color: #a5a7a9;
}
.read table tbody tr td.actions {
    padding: 8px;
    text-align: right;
}
.read table tbody tr td.actions .edit, .read table tbody tr td .actions .trash {
    display: inline-flex;
    text-align: right;
    text-decoration: none;
    color: #FFFFFF;
    padding: 10px 12px;
}
.read table tbody tr td.actions .trash {
    background-color: #b73737;
}
.read table tbody tr td.actions .trash:hover {
    background-color: #a33131;
}
.read table tbody tr td.actions .edit {
    background-color: #37afb7;
}
.read table tbody tr td.actions .edit:hover {
    background-color: #319ca3;
}

.update form {
    padding: 10px 0;
    display: flex;
    flex-flow: wrap;
}
.update form label {
    display: inline-flex;
    width: 400px;
    padding: 10px 0;
    margin-right: 50px;
}
.update form input {
    padding: 10px;
    width: 400px;
    margin-right: 25px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
}
.update form input[type="submit"] {
    display: block;
    background-color: #38b673;
    border: 0;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    cursor: pointer;
    width: 200px;
  margin-top: 15px;
}
.update form input[type="submit"]:hover {
    background-color: #32a367;
}


#create_btn{
    background-color: red !important;

}


.error{
  color:red;
}

	</style> 
 -->    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

</head>
<body>

  <div class="content read">
	<h2>Add Product</h2>
	
	<a href="http://localhost/php_Training/Cybercom_Creation1/index.php?c=product&a=form" class="create-contact">Add Product</a>
 
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>#</th>
				<th>SKU</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Description</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
      //echo '<pre>';
      //print_r($products);
      //die();
		foreach($products as $product){
		?>
		<tr id="tr_<?php echo $row['id']?>">
			<td><?php echo $product->productId; ?></td>
			<td><?php echo $product->sku; ?></td>
			<td><?php echo $product->name; ?></td>
			<td><?php echo $product->price; ?></td>
			<td><?php echo $product->quantity; ?></td>
			<td><?php echo $product->description; ?></td>
			<td><?php echo $product->status; ?></td>
			<td>
				<a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['productId'=>$product->productId],true);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['productId'=>$product->productId]);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php
		} 

		?>
		</tbody>
  </table>
	
</body>
</html>