
<?=$this->form->create(); ?>
    <?=$this->form->field('title', array('value' => $project->title));?>
    <?=$this->form->field('description', array('type' => 'textarea', 'value' => $project->description));?>
    <?=$this->form->submit('Save Project'); ?>
<?=$this->form->end(); ?>