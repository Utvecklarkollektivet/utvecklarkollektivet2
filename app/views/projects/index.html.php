<?php foreach($projects as $project): ?>
    <?=$this->html->link($project->title, "/Projects/view/$project->id");?><br>
<?php endforeach; ?>