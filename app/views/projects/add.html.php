<?php if ($success): ?>
    <p>Project Successfully created</p>
<?php endif; ?>

<?=$this->form->create(); ?>
    <?=$this->form->field('title');?>
    <?=$this->form->field('description', array('type' => 'textarea'));?>
    <?=$this->form->submit('Create Project'); ?>
<?=$this->form->end(); ?>