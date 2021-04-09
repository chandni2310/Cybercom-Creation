<nav class="navtop">
    	<div>
    		<h1>CMS Page</h1>
    	</div>
    </nav>
    <div class="content update">
    <h2>Add/Update CMS Pages</h2>
    <hr>
    <form action="<?php echo $this->getUrl()->getUrl('save','cmsPage'); ?>" method="POST">
        <?php echo $this->getTabContent(); ?>
     
       
    </form>
    
</div>

</body>
</html>