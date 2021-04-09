<?php $configGroup = $this->getTableRow(); ?>

<div class="create_data">
    
       
                
       
        
        <div class="form-group col-md-6">
            <label for="inputName">Name</label>
            <input type="text" name="configGroup[name]" id="name"  value="<?php echo $configGroup->name;?>" class="form-control">
            <div class="invalid-feedback d-block" id="name_err">
            </div>
        </div>
        <div class="form-group col-md-6">
           
</div>
<button type="submit" class="btn btn-success btn-lg" name="save" id="create_btn">SAVE</button> 