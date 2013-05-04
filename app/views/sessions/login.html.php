<? if($login_errors) { ?>
<div>
	<?= $login_errors ?>
</div>
<? } ?>

<?=$this->form->create(null); ?>
    <?=$this->form->field('email'); ?>
    <?=$this->form->field('password', array('type' => 'password')); ?>
    <?=$this->form->submit('Sign in'); ?>
<?=$this->form->end(); ?>