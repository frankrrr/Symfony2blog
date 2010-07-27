<?php $view->extend('BlogBundle::layout') ?>

<h1><?php echo $post->getTitle() ?></h1>

<p><?= $post->getBody() ?></p>
