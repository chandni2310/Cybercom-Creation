<?php 


require 'connection.php';
$title=$content=$url=$metatitle=$category='';
$title_err=$content_err=$url_err=$metatitle_err=$category_err=$file_err='';



if (isset($_GET['id'])) {
		$userid = $_GET['id'];
	} else if(isset($_POST['user_id'])){
		$userid=$_POST['user_id'];
	} else{
		$userid='';
	}

	//echo $userid;



	
		if(isset($_POST['update'])){
			$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
		
		//echo $_POST['prefix'];

		if(empty($_POST['title'])){
			$title_err="it is required";
		} else{
			$title=$_POST['title'];
		}

		if(empty($_POST['content'])){
			$content_err="it is required";
		} else{
			$content=$_POST['content'];
		}

		if(empty($_POST['meta_title'])){
			$metatitle_err="it is required";
		} else{
			$metatitle=$_POST['meta_title'];
		}

		if(empty($_POST['category'])){
			$category_err="it is required";
		} else{
			$category=$_POST['category'];
		}




		if(empty($_POST['url'])) {
		$url_err="url is required";
	} else {
		$url=($_POST['url']);
		if(!filter_var($url,FILTER_VALIDATE_URL)) {
			$email_err="Not proper url format";
		}
	}

	if(empty($file_name)){
		$file_err="It is required";
	} else{
		if(!($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")){

			$file_err='must be image';
}
	}


	if($title_err=='' && $content_err=='' && $url_err=='' && $metatitle_err=='' && $category_err=='' && $file_err==''){
		echo 'hello';
		move_uploaded_file ($file_path,'images/'.$file_name);

		$sql="UPDATE category SET Title='$title', Content='$content', Url='$url',Meta Title='$metatitle', Category='$category', Image=$file_name, UpdatedAt=NOW() WHERE id='$userid' ";
		$result = mysqli_query($conn,$sql);
						//echo $query;
						if ($result) {
							header('Location: categoryList.php');
						} else {
							echo "Sorry we couldn\'t update you at this time, Try again later.";
						}
	}






	} else{
		$sql="SELECT * from `category`";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		$title=$row['Title'];
		$title_err='';

		$content=$row['Content'];
		$content_err='';

		$url=$row['Url'];
		$url_err='';

		$metatitle=$row['MetaTitle'];
		$metatitle_err='';

		$category=$row['Category'];
		$category_err='';

		$file_name=$row['Image'];
		$file_err='';
	}
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
</head>
<body>
	<div class="content" align="center">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
		<h3>Update Category</h3>
		<table align="center">
			<tr>
				<td>Title</td>
				<td>
					<input type="text" name="title" value="<?php if(isset($title)){echo $title;} ?>">
					<span id="title_err" class="error">*<?php echo $title_err;?></span>
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td>
					<textarea name="content" rows="4" cols="20" value="<?php if(isset($content)){echo $content;} ?>"></textarea>
					<span id="content_err" class="error">*<?php echo $content_err;?></span>
				</td>
			</tr>
			<tr>
				<td>URL</td>
				<td><input type="url" name="url" value="<?php if(isset($url)){echo $url;} ?>">
					<span id="url_err" class="error">*<?php echo $url_err;?></span>
				</td>

			</tr>
			<tr>
				<td>Meta Title</td>
				<td>
					<input type="text" name="meta_title" value="<?php if(isset($metatitle)){echo $metatitle;} ?>">
					<span id="metatitle_err" class="error">*<?php echo $metatitle_err;?></span>
				</td>
			</tr>
			<tr>
				<td>Parent Category</td>
				<td><select name="category">
					<option value="select">Select</option>
					<option value="Education">Education</option>
					<option value="Health">Health</option>
					<option value="Lifestyle">Lifestyle</option>
				</select></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="file" value="<?php if(isset($file_name)){echo $filename;} ?>">
				<span id="file_err" class="error">*<?php echo $file_err;?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="update" value="UPDATE">
				</td>
			</tr>
		</table>

		
	</form>
</div>
</body>
</html>