<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?></title>
<link rel="stylesheet" href="<?php echo theurl; ?>cssjs/bootstrap.min.css"><link rel="stylesheet" href="<?php echo theurl; ?>style.min.css?201909021732">
<!--[if IE]>
<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
<![endif]-->
<?php $this->header('generator=&template='); ?>
</head>
<body>
<div id="snowwrap" class="animated fadeIn timing01"></div>
<div id="wrapper" class="wrapper">