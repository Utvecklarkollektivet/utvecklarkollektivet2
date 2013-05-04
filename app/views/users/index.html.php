 <h2>Users</h2>

    <ul>

        <?php foreach ($users as $user) { ?>
            <li>
            	<?= $user->id ?> - 
            	<?= $this->html->link($user->email, array("Users::show", "args" => array($user->id) )); ?> - 
            	<?= $user->password; ?> 
            	<?= $this->html->link("Delete", array('Users::delete', 'args' => array($user->id))); ?>
            </li>
        <?php } ?>
    </ul>