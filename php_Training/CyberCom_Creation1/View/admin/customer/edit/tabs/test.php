<?php 
$conn = mysqli_connect('localhost', 'root', '', 'cybercom_creation');
 
$sql = 'SELECT * FROM categories';
 
$result = mysqli_query($conn, $sql);
 
$categories = array();
 
while ($row = mysqli_fetch_assoc($result)){
    $categories[] = $row;
}

function showCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
        if ($item['parentId'] == $parent_id)
        {
            echo '<option value="'.$item[$key].'">';
                echo $char . $item['name'];
            echo '</option>';
             
            unset($categories[$key]);
            
            showCategories($categories, $item['categoryId'], $char.'|---');
        }
    }
}



 ?>

 <select>
    <?php showCategories($categories); ?>
</select>