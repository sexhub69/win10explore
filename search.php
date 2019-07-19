<?php
get_header();
?>

<div class="layui-container" id="main">
    <div class="blog-title"><img class="toobar-icon" src="<?php echo getImgDir('folder.png') ?>"
                                 alt=""><?php /*bloginfo('name');*/
        echo bloginfo('name')  ?>
        <div class="close"><i class="layui-icon layui-icon-close"></i>
        </div>
    </div>
    <div class="toolbar ">
        <div class="layui-row">
            <div class="obj_menu_header">
                <?php get_nav_menu_obj(); ?>
            </div>
        </div>
        <div class="layui-row">
            <div class="layui-col-md1  <?php get_self_adaption_css()?>">
                <div class="toobar-col"><i class="fa fa-arrow-left" aria-hidden="true"
                                           onclick="javascript :history.back(-1)"></i>
                    <i class="fa fa-arrow-right" aria-hidden="true" onclick="javascript :history.forward()"></i><i
                            class="fa fa-arrow-up" aria-hidden="true"></i></div>
            </div>
            <div class="layui-col-md9 layui-col-xs-12 layui-col-sm-12">
                <div class="toolbar-url"><img class="toobar-icon" src="<?php echo getImgDir('folder.png') ?>"
                                              alt=""><span><a
                                href="//<?php echo $_SERVER['SERVER_NAME']; ?>">本网站</span></a></span>><span>搜索内容</span>><span><?php echo get_search_query() ?></span>
                </div>
            </div>
            <div class="layui-col-md2  <?php get_self_adaption_css()?>">
                <?php get_search_obj();?>
            </div>
        </div>
    </div>
    <div class="layui-row content">
        <div class="layui-col-md2 sidebar <?php get_self_adaption_css()?>">
            <?php get_sidebar() ?>
        </div>
        <div class="layui-col-md10 postlist">
            <?php
            default_post();
            ?>
        </div>
        <div class="posts-nav">
            <?php posts_nav_link(' - '); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
<?php wp_footer(); ?>
</body>
</html>