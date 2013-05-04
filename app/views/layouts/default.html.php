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
	<?php echo $this->html->style(array('debug', 'lithium')); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
    <header><?php echo $this->menuhelper->generatemenu();?></header>
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