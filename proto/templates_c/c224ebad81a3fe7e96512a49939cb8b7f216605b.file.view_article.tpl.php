<?php /* Smarty version Smarty-3.1.15, created on 2016-05-05 23:45:06
         compiled from "C:\wamp\www\Overview\proto\templates\articles\view_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11407572b49bd710566-11169283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c224ebad81a3fe7e96512a49939cb8b7f216605b' => 
    array (
      0 => 'C:\\wamp\\www\\Overview\\proto\\templates\\articles\\view_article.tpl',
      1 => 1462484661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11407572b49bd710566-11169283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_572b49beccf1c7_80331502',
  'variables' => 
  array (
    'article' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572b49beccf1c7_80331502')) {function content_572b49beccf1c7_80331502($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/status_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo var_dump($_smarty_tpl->tpl_vars['article']->value);?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            <div class="blog-stripe">
                <div>
                    <div>
                        <div class="article-title"><h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2></div>
                        <div class="article-score"><?php echo $_smarty_tpl->tpl_vars['article']->value['score'];?>
</div>
                        <!-- TODO score implementation-->
                        <div class="article-scoring"><a href="#"><i class="fa fa-arrow-up"></i></a><br><a href="#"><i class="fa fa-arrow-down"></i></a></div>
                    </div>
                    <div class="article-summary"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</div>
                    <p class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
users/profile.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['last_name'];?>
</a>
                    </p>
                </div>
                <?php echo $_smarty_tpl->getSubTemplate ('common/image_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="article-body"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
            </div>
            <!-- TODO implement report description -->
            <div class="report-article"><a href="#" >Reportar artigo</a></div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('articles/related_articles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

    <div class="row">
      <!-- Facebook -->
      <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>

      <!-- Twitter -->
      <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>

      <!-- Google+ -->
      <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('articles/article_comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/view_article.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>