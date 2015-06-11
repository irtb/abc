<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-11 17:59:37
         compiled from "/opt/www/project/abc/template/left.html" */ ?>
<?php /*%%SmartyHeaderCode:1157881615557956c875a0f9-37669456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0a4db21adcf27354d2926ec252a1200db10219' => 
    array (
      0 => '/opt/www/project/abc/template/left.html',
      1 => 1434016609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157881615557956c875a0f9-37669456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557956c8766f27_98191654',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557956c8766f27_98191654')) {function content_557956c8766f27_98191654($_smarty_tpl) {?><!--BEGIN #left-->
<div id="sidebar" class="aside">
    <div id="logo">
        <a class="logo-link" href="/" title="{$Think.config.CFG_WEBNAME}" style="text-indent: 0px; "></a>
    </div>
    <div id="search-4" class="widget widget_search clearfix">
        <form method="post" id="searchform" action="__APP__/Index/search">
            <input type="text" value="输入关键字按Enter搜索..." onfocus="if(this.value=='输入关键字按Enter搜索...')this.value='';"
            onblur="if(this.value=='')this.value='输入关键字按Enter搜索...';" name="searchkey"
            id="s" />
            <input type="submit" id="searchsubmit" value="Search" class="hidden" />
        </form>
    </div>
    <div id="wb_follow_btn" class="widget widget_search clearfix">
        <wb:follow-button uid="5517754566" type="red_3" width="100%" height="24" ></wb:follow-button>
        <br/>
        <?php echo '<script'; ?>
 type="text/javascript" src="http://ext.weather.com.cn/54349.js">
        <?php echo '</script'; ?>
>
        <br/>
        <img src="/public/images/wechat.jpg" alt="微信账号" width="260px" height="260px"
        />
    </div>
    <div id="tz_tab_widget-4" class="widget tz_tab_widget clearfix">
        <div id="tabs">
            <ul id="tab-items">
                <li><a href="#tabs-1"><span>热门</span></a></li>
                <li><a href="#tabs-2"><span>最新</span></a></li>
                <li><a href="#tabs-3"><span>美图</span></a></li>
                <li><a href="#tabs-4"><span>标签</span></a></li>
            </ul>
            <div class="tabs-inner">
                <div id="tabs-1" class="tab tab-popular">
                    <ul>
                        <volist name='hot' id='data'>
                            <li class="clearfix">
                                <h3 class="entry-title">
                                    <a href="{:U('Article/detail?id='.$data['id'])}" class="title">{$data.title}</a>
                                    <span style="float:right;">{$data.create_time|date="Y-m-d" ,###}</span>
                                </h3>
                            </li>
                        </volist>
                    </ul>
                </div>
                <!-- #tabs-1 -->
                <div id="tabs-2" class="tab tab-recent">
                    <ul>
                        <volist name='new' id='data'>
                            <li class="clearfix">
                                <h3 class="entry-title">
                                    <a href="{$data.arcurl}" class="title">{$data.title}</a>
                                    <span style="float:right;">{$data.create_time|date="Y-m-d" ,###}</span>
                                </h3>
                            </li>
                        </volist>
                    </ul>
                </div>
                <!-- #tabs-2 -->
                <div id="tabs-3" class="tab tab-comments">
                    <ul>
                        <volist name='commentlist' id='data'>
                            <li class="clearfix">
                                <span class="recentcommentsavatar">
                                    <img alt='RUI个人博客' src='/public/images/logo_03.jpg' class='avatar' height='32'
                                    width='32' />
                                </span>
                                <a class="tabcommentlink" href="{$data.url}" title="评论文章《{$data.title}》">
                                    {$data.content}
                                        ...
                                </a>
                                <br/>
                                <span class="recentcomments_author">
                                    {$data.writer}
                                </span>
                                <span class="recentcomments_date">
                                    {$data.time|date="Y-m-d" ,###}
                                </span>
                            </li>
                        </volist>
                    </ul>
                </div>
                <!-- #tabs-3 -->
                <div id="tabs-4" class="tab tab-tags clearfix">
                    <volist name='taglist' id='data'>
                        <a href='{$data.tagurl}' title='{$data.num} 篇文章' style='font-size: 12px;'>
                            {$data.tagname}
                        </a>
                    </volist>
                </div>
                <!-- #tabs-4 -->
            </div>
            <!-- .tabs-inner -->
        </div>
        <!-- #tabs -->
    </div>
    <div id="archives-3" class="widget widget_archive clearfix">
        <h3 class="widget-title">
            文章分类
        </h3>
        <ul>
            <volist name='categorylist' id='data'>
                <li>
                    <a href='{$data.url}' title='{$data.count} 篇文章'>
                        {$data.colname}
                    </a>
                    &nbsp;(
                    {$data.count}
                        )
                </li>
            </volist>
        </ul>
    </div>
    <div id="archives-2" class="widget widget_archive clearfix">
        <h3 class="widget-title">
            文章归档
        </h3>
        <ul>
            <volist name='datelist' id='data'>
                <li>
                    <a href='{$data.url}' title='{$data.count} 篇文章'>
                        {$data.time}
                    </a>
                    &nbsp;(
                    {$data.count}
                        )
                </li>
            </volist>
        </ul>
    </div>
    <div id="linkcat-2" class="widget widget_links clearfix">
        <h3 class="widget-title">
            友情链接
        </h3>
        <ul class='xoxo blogroll'>
            <volist name='linklist' id='data'>
                <li>
                    <a href="{$data.url}" target="_blank">
                        {$data.linkname}
                    </a>
                </li>
            </volist>
        </ul>
    </div>
    <div id="bd_random_post_widget-5" class="widget widget_bd_random_post_widget clearfix">
        <h3 class="widget-title">
            随机文章
        </h3>
        <ul class="line">
            <volist name='randlist' id='data'>
                <li>
                    <a href="{$data.arcurl}" title="{$data.title}" target="_blank">
                        {$data.title}
                    </a>
                </li>
            </volist>
        </ul>
    </div>
    <div id="rollstart">
    </div>
    <!--END #left-->
</div><?php }} ?>
