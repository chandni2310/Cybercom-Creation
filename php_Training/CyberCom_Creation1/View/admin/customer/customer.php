<?php 
$customers=$this->getCustomer();


 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
    
    <div class="content read">
    <h2>Add Customer</h2>
    
    <a href="<?php echo $this->getUrl()->getUrl('form');   ?>" class="create-contact">Add Customer</a>
    <table class="table table-bordered table-striped" >
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Customer Group</th>
                <th>Billing Address</th>
                <th>Status</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($customers as $customer){
        ?>
        <tr id="tr_<?php echo $row['id']?>">
            <td><?php echo $customer->customerId; ?></td>
            <td><?php echo $customer->firstName; ?></td>
            <td><?php echo $customer->email; ?></td>
            <td><?php echo $customer->mobile; ?></td>
            <td><?php echo $customer->name; ?></td>
            <td><?php echo $customer->address; ?></td>
            <td><?php echo $customer->status; ?></td>
            <td><?php echo $customer->createdDate; ?></td>
            <td>
                <a href="<?php echo $this->getUrl()->getUrl('form', NULL, ['customerId'=>$customer->customerId],true);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                <a href="<?php echo $this->getUrl()->getUrl('delete', NULL, ['customerId'=>$customer->customerId],true);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

            </td>
        </tr>
        <?php
        } 

        ?>
        </tbody>
    </table>
    
</body>
</html>