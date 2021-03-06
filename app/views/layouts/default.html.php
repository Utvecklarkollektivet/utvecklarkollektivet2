<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2013, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('debug', 'lithium', 'foundation')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
    <nav class="top-bar">
        <section class="top-bar-section">
            <ul class="left"></ul>
            <ul class="right">
                <?php echo $this->MenuHelper->GenerateMenu();?>
            </ul>
        </section>
    </nav>
	<div id="container">
		<div id="header">
			<h1>Utvecklarkollektivet</h1>
		</div>
		<div id="content">
			<?php echo $this->content(); ?>
		</div>
	</div>
</body>
</html>