<?php foreach($projects as $project): ?>
    <?=$this->html->link($project->title, "/Projects/show/$project->id");?><br>
<?php endforeach; ?>