<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if(!is_ajax()): ?><?php $this->need('header.php'); ?><?php endif; ?>
<div class="container">
<div class="row">
<div class="col-xs-12"><div class="card">
<h2><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s'),
            'search'    =>  _t('检索到包含 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
        ), '', ''); ?></h2>
<?php if($this->getDescription() && ($this->is('category') || $this->is('tag'))){echo '<p>'.$this->getDescription().'</p>';} ?>
</div></div>
</div></div>

<div class="container pb-10">
<div class="row" id="rongqi">

<?php if ($this->have()): ?>
<?php while($this->next()): ?>

<div class="col-sm-12 hang">
<div class="card">
<a href="<?php $this->permalink() ?>"><h2 class="post-title"><?php $this->title(); ?></h2></a>
<div id="github-icons"></div>
<p><?php $this->excerpt(120, ''); ?></p>
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
