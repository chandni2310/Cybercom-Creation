<?php $attribute = $this->getAttribute() ?>
<?php $options = $attribute->getOptions(); ?>
<?php $entity = $attribute->entityTypeId; ?>
<?php $code = $attribute->code; ?>

<?php switch ($entity) {
    case 'product':
        $product = $this->getEntity();
        break;
    case 'category':
        $category = $this->getEntity();
        break;

} ?>


<?php if ($attribute->inputType == 'select') : ?>
    <div class="form-group">
        <label for=""><?= $attribute->name ?></label>
        <select class="form-control" name="<?= $attribute->entityTypeId ?>[<?= $attribute->code ?>]">
            <?php if ($options) : ?>
                <?php foreach ($options as $option) : ?>
                    <option value="<?= $option->name ?>" <?= in_array($option->optionId, explode(',', $$entity->$code)) ? 'selected' : '' ?>><?= $option->name ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>


<?php elseif ($attribute->inputType == 'textarea') : ?>
    <div class="form-group">
        <label for=""><?= $attribute->name ?></label>
        <textarea class="form-control" name="<?= $attribute->entityTypeId ?>[<?= $attribute->code ?>]" rows="4" cols="20"><?= $$entity->$code ?></textarea>
    </div>
<?php else : ?>
    <div class="form-group">
        <label for="<?= $attribute->entityTypeId ?>[<?= $attribute->code ?>]"><?= $attribute->name ?></label>
        <input class="form-control" type="<?= $attribute->inputType ?>" value="<?= $$entity->$code ?>" name="<?= $attribute->entityTypeId ?>[<?= $attribute->code ?>]" id="<?= $attribute->entityTypeId ?>[<?= $attribute->code ?>]">
    </div>

<?php endif; ?>