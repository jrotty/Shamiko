<?php
/**
 * 
 * @package Shamiko
 * @author 泽泽社长
 * @version 1.1.1
 * @link https://qqdie.com/archives/shamiko-typecho-themes.html
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 ?>
<?php if(!is_ajax()): ?><?php $this->need('header.php'); ?><?php endif; ?>
<div class="container">
<div class="row">
<div class="col-xs-12"><div class="card">
<div>
<img src="<?php echo theurl; ?>logo/chara_list<?php $this->options->qiehuanlaopo(); ?>.png" class="logo">
<h1 class="logotxt" data-text="<?php if ($this->options->logotxt): ?><?php $this->options->logotxt() ?><?php else: ?><?php $this->options->title(); ?><?php endif; ?>"><?php if ($this->options->logotxt): ?><?php $this->options->logotxt() ?><?php else: ?><?php $this->options->title(); ?><?php endif; ?></h1>
<p><?php if ($this->options->logod): ?><?php $this->options->logod() ?><?php else: ?><?php $this->options->description() ?><?php endif; ?></p></div>
</div></div>
</div></div>

<div class="container pb-10">
<div class="row" id="rongqi">

<?php if ($this->have()): ?>
<?php while($this->next()): ?>

<div class="col-sm-6 hang">
<div class="card">
<a href="<?php $this->permalink() ?>"><h2 class="post-title"><?php $this->title(); ?></h2></a>
<p class="slr"><?php $this->excerpt(90, ''); ?></p>
</div></div>
<?php endwhile; ?>







</div>





<div class="row">
<div class="col-xs-12">

<?php if($this->_currentPage>1): ?>
<?php if($this->_currentPage < ceil($this->getTotal() / $this->parameter->pageSize)): ?><div class="card tc"><?php $this->pageLink('下一页','next'); ?></div><?php endif; ?>
<div class="card tc"><?php $this->pageLink('上一页'); ?></div>
<?php else: ?>

<?php if($this->_currentPage < ceil($this->getTotal() / $this->parameter->pageSize)): ?>
<div class="card tc loadmore"><?php $this->pageLink('<span>点击加载更多</span>','next'); ?></div><?php endif; ?>
<?php endif; ?>
</div>
</div>
<?php else: ?>
文章不存在！检索不到...
<?php endif; ?>

</div>




<?php if(!is_ajax()): ?><?php $this->need('footer.php'); ?><?php endif; ?>


