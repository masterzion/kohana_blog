<?php defined('SYSPATH') or die('No direct script access.'); ?>


<?php foreach ($articles as $article) : ?>
<div class="article">
        <div class="title"><?php echo HTML::anchor("article/view/".$article->id, $article->title, array('class' => 'articlelink')); ?></div>
        <pre class="articletext"><?php echo $article->content; ?></pre>
        

        <?php echo HTML::anchor("article/edit/".$article->id, HTML::image("public/edit.png", array('width' => 32, 'height'=> 32 )) ); ?>
        <?php echo HTML::anchor("article/delete/".$article->id, HTML::image("public/del.png", array('width' => 32, 'height'=> 32 )) ); ?>
</div>
<?php endforeach; ?>