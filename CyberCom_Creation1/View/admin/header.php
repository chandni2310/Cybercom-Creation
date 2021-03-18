<!DOCTYPE html>
<html>
<body>
	<nav class="navtop">
    	<div>
    		<h1>QuesteCom</h1>

        	<a href=<?php echo $this->getUrl()->getUrl('grid','product'); ?>>Pproduct</a>
        	<a href=<?php echo $this->getUrl()->getUrl('grid','customer'); ?>>Customer</a>
        	<a href=<?php echo $this->getUrl()->getUrl('grid','category'); ?>>Category</a>
        	<a href=<?php echo $this->getUrl()->getUrl('grid','shipping'); ?>>Shipping</a>
        	<a href=<?php echo $this->getUrl()->getUrl('grid','payment'); ?>>Payment</a>
            <a href=<?php echo $this->getUrl()->getUrl('grid','admin'); ?>>Admin</a>

    	
    	</div>
    </nav>

</body>
</html>