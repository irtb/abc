<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-11 17:59:37
         compiled from "/opt/www/project/abc/template/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1477035178557941e940dca3-29535784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2ccf1ce45ed801c2b5fb167a6b7912bf8ad372' => 
    array (
      0 => '/opt/www/project/abc/template/index.html',
      1 => 1434016096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1477035178557941e940dca3-29535784',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557941e94571f6_30205777',
  'variables' => 
  array (
    'flag' => 0,
    'position' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557941e94571f6_30205777')) {function content_557941e94571f6_30205777($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<!-- 主体 -->
	<div id="container">
		<div id="content" class="clearfix">
			<div id="content-wrap" class="clearfix">
				<div id="content-top">&nbsp;</div>
				<?php echo '<script'; ?>
 language="JavaScript">
				$(document).ready(function(){
					var i = 0;
					$(window).scroll(function(){
						if ($(document).height()-$(document).scrollTop()-$(window).height()<150){
							if($('#rui-prompt').text() == ''){
								loadArticle('__URL__/getArticle','<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
',++i);
							}
						}
					});
				});	
				<?php echo '</script'; ?>
>
				<div id="primary" class="hfeed">
					<!--Position-->
					<div class="clearfix" style="margin-bottom:5px">
						<img src="/public/images/home.png" width='18' height='16' alt='Five个人博客' />
						&nbsp;
						<?php echo $_smarty_tpl->tpl_vars['position']->value;?>

					</div>
					<volist name='arclist' id='data'>
						<div>
							<h2 class="entry-title"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['arcurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a></h2>
							<div class="entry-meta entry-header">
								<span class="contentinfo_time"><?php echo $_smarty_tpl->tpl_vars['data']->value['createtime'];?>
</span>
								<span class="contentinfo_category"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['colurl'];?>
" title="查看 <?php echo $_smarty_tpl->tpl_vars['data']->value['colname'];?>
 中的全部文章"><?php echo $_smarty_tpl->tpl_vars['data']->value['colname'];?>
</a></span>
								<span class="contentinfo_view"><?php echo $_smarty_tpl->tpl_vars['data']->value['click'];?>
次点击</span>
								<span class="contentinfo_comment"><?php echo $_smarty_tpl->tpl_vars['data']->value['commentnum'];?>
条评论</span>
							</div>
							<div class="post-thumb post-lead">
								<if condition="$data.pic neq ''">
								<a title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['arcurl'];?>
">
								<img width="570" height="140" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic'];?>
" class="attachment-archive-thumb wp-post-image" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" /></a>
								</if>
							</div>
							<div class="entry-content">
								<p><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
...</p>
								<p><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['arcurl'];?>
" class="more-link">阅读全文 »</a></p>
							</div>
						</div>
					</volist>
				</div>
				<div id="content-btm">&nbsp;</div>
				<div class="page-navigation" style="font-size:20px;display:none" id="rui-prompt"></div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
