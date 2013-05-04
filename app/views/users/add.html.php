 <h2>Add user</h2>
    <?=$this->form->create($user); ?>
        <?=$this->form->field('email'); ?>
        <?=$this->form->field('password', array('type' => 'password')); ?>
        <?=$this->form->submit('Create user'); ?>
    <?=$this->form->end(); ?>