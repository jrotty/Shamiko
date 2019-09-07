sousuo = function(){
$('.js-toggle-search').toggleClass('is-active');
$('.js-search').toggleClass('is-visible');
}
close = function(){
 if($('.js-search').hasClass('is-visible')){
$('.js-toggle-search').toggleClass('is-active');
$('.js-search').toggleClass('is-visible');}
}



/*ajax点击加载更多*/
jQuery(document).ready(function($) {
if(!$("#nojia").length > 0){
    //点击下一页的链接(即那个a标签)
    $('.loadmore a.next').click(function() {
        $this = $(this);
        $this.addClass('loading').text('正在努力加载'); //给a标签加载一个loading的class属性，用来添加加载效果
        var href =  $('.next').attr('href'); //获取下一页的链接地址
        if (href != undefined) { //如果地址存在
            $.ajax({ //发起ajax请求
                url: href,
                //请求的地址就是下一页的链接
                type: 'get',
                //请求类型是get
                error: function(request) {
                    //如果发生错误怎么处理
                },
                success: function(data) { //请求成功
                    $this.removeClass('loading').text('点击加载更多'); //移除loading属性
                    var $res = $(data).find('.hang'); //从数据中挑出文章数据，请根据实际情况更改
$('#rongqi').append($res.fadeIn(500)); //将数据加载加进posts-loop的标签中。
                    var newhref = $(data).find('.next').attr('href'); //找出新的下一页链接
                    if (newhref != undefined) {
$('.next').attr('href', newhref);
                    } else {
                        $('.loadmore').html('QAQ没了');//如果没有下一页了
                    }
                }
            });
        }
        return false;
    });
}


$('#sousuo').click(sousuo);
$('.search_close').click(close);


var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
        .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
            $("html, body").stop().animate({ scrollTop: 0 },1);
    }), $backToTopFun = function() {
        var st = $(document).scrollTop(), winh = $(window).height();
        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();    
        //IE6下的定位
        if (!window.XMLHttpRequest) {
            $backToTopEle.css("top", st + winh - 166);    
        }
    };
    $(window).bind("scroll", $backToTopFun);
    $(function() { $backToTopFun(); });






});
