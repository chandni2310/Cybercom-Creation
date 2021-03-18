<?php 

$cmsPage = $this->getTableRow();

 ?>

 <div class="create_data">
       
       
                
                <div class="form-group col-md-6">
                    <label for="inputName">Title</label>
                    <input type="text" name="cmsPage[title]" id="sku"  value="<?php echo $cmsPage->title;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="sku_err">
                    </div>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputName">Identifier</label>
                    <input type="text" name="cmsPage[identifier]" id="name"  value="<?php echo $cmsPage->identifier;?>" class="form-control">
                    <div class="invalid-feedback d-block" id="name_err">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Content</label>
                    <textarea name="cmsPage[content]" id="cmsPageContent" class="form-control" rows="3" cols="40"> <?php echo html_entity_decode($cmsPage->content); ?></textarea>
                    <div class="invalid-feedback d-block" id="sku_err">
                    </div>
                </div>
                
    
                <div class="form-group col-md-6">
                    <label for="inputCreated">Status</label>
                    <select name="cmsPage[status]" class="form-control">
                        <option value="enabled" 
                        <?php if($cmsPage->status=='enabled'){
                            echo 'selected';
                        } ?>>Enabled</option>
                        <option value="disabled"
                        <?php if($cmsPage->status=='disabled'){
                            echo 'selected';
                        } ?>>Disabled</option>
                    </select>
                    <div class="invalid-feedback d-block" id="status">
                    </div>

                </div>
                

                

            </div>
            <button type="submit" class="btn btn-success btn-lg" name="save" id="create_btn">SAVE</button> 

<script type="text/javascript">
   tinymce.init({
    selector: '#cmsPageContent',
    width: 490,
    height: 300
});

</script>