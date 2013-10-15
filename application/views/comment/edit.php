<?php defined('SYSPATH') or die('No direct script access.'); ?>
 
<h3>Add your comment</h3>
<?php $errors = isset($errors) ? $errors : array(); ?>
 
<?php echo Form::open('comment/post/'); ?>
    <?php echo Form::label("name", "Name"); ?>
    <br />
    <?php echo Form::input("name", $comment->name); ?>
    <span class="error"><?php echo Arr::get($errors, 'name');?></span>
    <br />
    <br />
    <?php echo Form::label("email", "Email"); ?>
    <br />
    <?php echo Form::input("email", $comment->email); ?>
    <span class="error"><?php echo Arr::get($errors, 'email');?></span>
    <br />
    <br />
    <?php echo Form::label("comment", "Comment"); ?>
    <br />
    <?php echo Form::textarea("comment", $comment->comment); ?>
    <span class="error"><?php echo Arr::get($errors, 'comment');?></span>
    <br />
    <br />
    <?php echo Form::hidden("article_id", $article->pk()); ?>
    <?php echo Form::submit("submit", "Submit"); ?>
    
<?php echo Form::close(); ?>