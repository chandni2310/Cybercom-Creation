
<!DOCTYPE html>
<html>
<head>
	<title>Attribute Page</title>
	
</head>
<body>
	<nav class="navtop">
    	<div>
    		<h1>Attribute</h1>
    	</div>
    </nav>
    <div class="content update">
    <h2>Add/Update Attribute</h2>
    <hr>
    <form action="<?php echo $this->getUrl()->getUrl('save',null); ?>" method="POST">
        <?php echo $this->getTabContent(); ?>
        
    </form>
    
</div>

</body>
</html>