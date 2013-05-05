<h1><?=$project->title?></h1>
<?= $project->permission_owner.$project->permission_group.$project->permission_world?>
<h4><?=$project->description;?></h4>
<h2>Comments</h2>
<?php foreach($comments as $comment): ?>
	<?php echo $comment->content.'<br>'; ?>
<?php endforeach; ?>

<?=$this->form->create(null, array('url' => array('controller' => 'comments', 'action' => 'add'))); ?>
	<?=$this->form->hidden('project_id', array('value' => $project->id)); ?>
    <?=$this->form->field('content', array('type' => 'textarea'));?>
    <?=$this->form->submit('Comment'); ?>
<?=$this->form->end(); ?>