
<table>
    <tbody>
        <tr>
            <td><?php echo $this->getTabHtml(); ?></td>
            <td>
                <form action="<?php echo $this->getFormUrl(); ?>" method="POST" enctype="multipart/form-data">
                 <?php echo $this->getTabContent(); ?>
                </form>   
            </td>
        </tr>
    </tbody>
</table>
    
    

