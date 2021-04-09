<?php 
/*echo '<pre>';
print_r($this->getParentCategories());
*/
$parentCategories = $this->getParentCategories();

 ?>

 <div class="header-parent-menu">
    <div class="">
        <ul class="p-1">
        	<?php  foreach ($parentCategories as $parentCategory): ?>
        		<li><?php echo $parentCategory->name; ?></li>
        	<?php endforeach; ?>
        </ul>
    </div>
</div>