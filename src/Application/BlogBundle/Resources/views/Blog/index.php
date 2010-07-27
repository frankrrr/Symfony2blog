<?php $view->extend('BlogBundle::layout') ?>

<?php foreach($posts AS $post): ?>
	<h2><?= $post->getTitle() ?></h2>
	<p><?= $post->getSummary() ?></p>
	<hr />
<?php endforeach; ?>