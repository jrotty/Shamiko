<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
//如果你想使用其他评论头像插件，请注释下面这行代码！
define('__TYPECHO_GRAVATAR_PREFIX__', '//'.$this->options->gravatars.'/');
?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有 1 条评论'), _t('已有 %d 条评论')); ?></h3>
    
<?php $comments->listComments(array(
            'before'        =>  '<ol class="comment-list">',
            'after'         =>  '</ol>',
            'beforeAuthor'  =>  '',
            'afterAuthor'   =>  '',
            'beforeDate'    =>  '',
            'afterDate'     =>  '',
            'dateFormat'    =>  'Y年m月d日',
            'replyWord'     =>  _t('回复'),
            'commentStatus' =>  _t('您的评论正等待审核!'),
            'avatarSize'    =>  50,
            'defaultAvatar' =>  NULL
        )); ?>


    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
    	<h3 id="response"><span class="cancel-comment-reply">
        <?php $comments->cancelReply('取消评论，'); ?>
        </span> <?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<div class="mb-1"><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></div>
            <?php else: ?>
<div class="row">
<div class="col-sm-4 mb-1">
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" placeholder="称呼" required />
</div><div class="col-sm-4 mb-1">
<input type="email" name="mail" id="mail" class="text"  placeholder="邮箱" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
</div><div class="col-sm-4 mb-1">
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div></div>
 <?php endif; ?>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea mb-1" placeholder="评论内容" required ><?php $this->remember('text'); ?></textarea>
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
