<?php if(!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<form  method="post" action="<?php $this->options->siteUrl(); ?>" role="search" class="js-search search-form search-form--modal">
		<div class="search-form__inner">
			<div class="mb-1">
				<p class="mb-1">输入后按回车搜索 ...</p>
				<div><img src="<?php echo theurl; ?>img/search.png" class="xinai"></div>
				<input id="keyword" class="text-input" type="search" name="s" placeholder="Search" required>
			</div>



<?php 
//分类颜色块设置RGB
$n=0;
$color=array("#9ebeef;","#ffaebf;","#CDDC39",); ?>
<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
<div class="card">
<b>分类：</b><div>
<?php while($categorys->next()): ?>
<a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>" style="color:<?php echo $color[$n];$n++;if($n==3){$n=0;}; ?>;"><?php $categorys->name(); ?></a>
 <?php endwhile; ?></div></div>
		</div>
		<div class="search_close"></div></form>













<div id="footer">
<div class="container">
<div class="row">
<div class="col-sm-12"><div class="card"><div>
<?php echo date('Y'); ?> © <a target="_blank" href="http://typecho.org/" rel="external nofollow">Typecho</a> Theme <a target="_blank" href="https://qqdie.com/archives/shamiko-typecho-themes.html" rel="external nofollow">Shamiko</a> 
</div></div></div>
</div></div>
</div>


<button id="mm-menu-toggle" class="mm-menu-toggle"></button>
<nav id="mm-menu" class="mm-menu">
<div class="mm-menu__header">

<div class="mm-menu_blur"><div class="mm-menu__title"><?php $this->options->title(); ?></div></div>
</div>
<ul class="mm-menu__items">
<li class="mm-menu__item item-1">
<a class="mm-menu__link" href="<?php $this->options->rootUrl(); ?>/">
<span class="mm-menu__link-text">首页</span>
</a>
</li>


 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
<li class="mm-menu__item">
<a href="<?php $pages->permalink(); ?>" class="mm-menu__link"><span class="mm-menu__link-text"><?php $pages->title(); ?></span></a>
</li>
 <?php endwhile; ?>
<li class="mm-menu__item">
<a href="javascript:void(0);" id="sousuo" class="mm-menu__link"><span class="mm-menu__link-text">搜索</span></a>
</li>

</ul>
</nav>
<script src="<?php echo theurl; ?>cssjs/materialMenu.min.js"></script>
<script>var menu = new Menu;</script><div class="mm-menu-mask"></div>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo theurl; ?>main.js?201909021732"></script>
<script src="<?php echo theurl; ?>cssjs/snowfall.jquery.js"></script>
<!-- snowfall.js setting-->
<script type="text/javascript">
$('#snowwrap').snowfall({
  image : [
"<?php echo theurl; ?>img/flake01_a.png",
"<?php echo theurl; ?>img/flake02_c.png",
"<?php echo theurl; ?>img/flake03_c.png",
"<?php echo theurl; ?>img/flake04_a.png",
"<?php echo theurl; ?>img/flake05_a.png",
"<?php echo theurl; ?>img/flake06_b.png"
  ],
flakeColor:"#000",
shadow:false,
minSize:20,
maxSize:50,
flakeCount:20,
minspeed:0.2,
maxSpeed:1.5,
});
</script>
<!-- /snowfall.js setting -->

<?php $this->footer(); ?>
</body></html>