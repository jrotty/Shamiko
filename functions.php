<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
define("THEME_URL",str_replace('//usr','/usr',str_replace(Helper::options()->siteUrl,Helper::options()->rootUrl.'/',Helper::options()->themeUrl)));
define("theurl",THEME_URL."/");
$info = Typecho_Plugin::parseInfo(__DIR__ . '/index.php');
define("Version", $info['version']);

//代码不规范，泽泽两行泪！


function themeConfig($form) {

    $logotxt = new Typecho_Widget_Helper_Form_Element_Text('logotxt', NULL, NULL, _t('标题文字'), _t('用于显示在首页，不填的话默认为站点标题'));
    $form->addInput($logotxt);


    $logod = new Typecho_Widget_Helper_Form_Element_Text('logod', NULL, NULL, _t('描述文字'), _t('用于显示在首页标题下方，不填则默认为站点描述'));
    $form->addInput($logod);



 $gravatars = new Typecho_Widget_Helper_Form_Element_Select('gravatars', array(
'www.gravatar.com/avatar' => _t('gravatar的www源'),'cn.gravatar.com/avatar' => _t('gravatar的cn源'),'secure.gravatar.com/avatar' => _t('gravatar的secure源'),'sdn.geekzu.org/avatar' => _t('极客族'),'gravatar.proxy.ustclug.org/avatar' => _t('中科大[不建议]'),'cdn.v2ex.com/gravatar' => _t('v2ex源'),'dn-qiniu-avatar.qbox.me/avatar' => _t('七牛源[不建议]'),'gravatar.helingqi.com/wavatar' => _t('禾令奇[建议]'),'gravatar.loli.net/avatar' => _t('loli.net源'),
    ), 'gravatar.helingqi.com/wavatar',
    _t('gravatar头像源'), _t('默认gravatar.helingqi.com/wavatar')); 
    $form->addInput($gravatars->multiMode());

}



function themeInit($archive)
{
// 强奸用户，强制用户文章最新评论显示在文章首页
 Helper::options()->commentsPageDisplay = 'first';
// 强奸用户，将较新的评论显示在前面
 Helper::options()->commentsOrder= 'DESC';
// 强奸程序，突破评论回复楼层限制
 Helper::options()->commentsMaxNestingLevels = 999;
// 文章内链接新窗口打开
$archive->content=preg_replace("/<a href=\"([^\"]*)\">/i", "<a href=\"\\1\" target=\"_blank\" rel=\"nofollow\">", $archive->content);
}
function is_ajax()
{
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        if ('xmlhttprequest' == strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            return true;
        }
    }
    return false;
}