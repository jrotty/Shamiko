<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="container pb-10">
<div class="row">
<div class="col-sm-12"><div class="card post">
<h2 class="post-title" data-text="<?php $this->title(); ?>"><?php $this->title(); ?></h2>
<?php if ($this->is('post')) : ?><p><?php _e('时间: '); ?><time datetime="<?php $this->date('Y年-m月-d日'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>&nbsp;&nbsp;
<?php _e('分类: '); ?><?php $this->category(',', true, '没有'); ?>&nbsp;&nbsp;
<?php _e('标签: '); ?><?php $this->tags(', ', true, '没有'); ?></p><?php endif; ?>


<div class="wysiwyg"><?php $this->content(); ?></div>
</div></div>




<?php if ($this->is('post')) : ?>
<div class="col-sm-6">
<div class="card"><div>前篇： <?php $this->thePrev('%s','没有了'); ?></div></div>
</div>
<div class="col-sm-6">
<div class="card"><div>后篇： <?php $this->theNext('%s','没有了'); ?></div></div>
</div>
<?php endif; ?>

<div class="col-sm-12"><div class="card">
<?php  $this->need('comments.php'); ?></div></div>
</div></div>



<?php $this->need('footer.php'); ?>
