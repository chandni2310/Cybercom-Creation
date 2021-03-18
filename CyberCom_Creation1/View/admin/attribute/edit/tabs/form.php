<?php $attribute = $this->getTableRow(); ?>

<div class="create_data">
    
       
                
        <div class="form-group col-md-6">
            <label for="inputName">Entity type Id</label>
            <select name="attribute[inputType]"  class="form-control">
                <?php foreach ($attribute->getEntityTypeOptions() as $key=>$value): ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback d-block" id="sku_err">
            </div>
        </div>
        
        <div class="form-group col-md-6">
            <label for="inputName">Name</label>
            <input type="text" name="attribute[name]" id="name"  value="<?php echo $attribute->name;?>" class="form-control">
            <div class="invalid-feedback d-block" id="name_err">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputName">Code</label>
            <input type="text" name="attribute[code]" id="sku"  value="<?php echo $attribute->code;?>" class="form-control">
            <div class="invalid-feedback d-block" id="sku_err">
            </div>
        </div>
        
        <div class="form-group col-md-6">
            <label for="inputCreated">Input Type</label>
            <select name="attribute[inputType]"  class="form-control">
                <?php foreach ($attribute->getInputTypeOption() as $key=>$value): ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback d-block" id="description_err" >
            </div>

        </div>

        <div class="form-group col-md-6">
            <label for="inputCreated">Backend Type</label>
            <select name="attribute[backendType]"  class="form-control">
                <?php foreach ($attribute->getBackendTypeOption() as $key=>$value): ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback d-block" id="description_err" >
            </div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputName">Sort Order</label>
            <input type="text" name="attribute[sortOrder]" id="sku"  value="<?php echo $attribute->sortOrder;?>" class="form-control">
            <div class="invalid-feedback d-block" id="sku_err">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputName">Backend Model</label>
            <input type="text" name="attribute[backendModel]" id="sku"  value="<?php echo $attribute->backendModel;?>" class="form-control">
            <div class="invalid-feedback d-block" id="sku_err">
            </div>
        </div>

</div>
<button type="submit" class="btn btn-success btn-lg" name="save" id="create_btn">SAVE</button> 