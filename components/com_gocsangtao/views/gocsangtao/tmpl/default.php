<?php

defined('_JEXEC') or die;
$image_banner = JKentlib::getCategoryImage(23);
$category_info = JKentlib::getCategoryInfo(23);
$article_id = JRequest::getInt('id');
if ($article_id == 0) {
    $article = JKentlib::getArticleFromCategory(23);
    $article = $article[0];
} else {
    $article = JKentlib::getArticleInfo($article_id);
}

$product_title = $article->title;
$product_image = json_decode($article->images)->image_intro;
$product_intro = $article->introtext;
$product_content = $article->fulltext;
$product_cat_id = $article->catid;
?>
<div class="mainwidth container">
    <?php
    $document = JFactory::getDocument();
    $params = array();
    $renderer = $document->loadRenderer('module');
    $position = 'bread_crumbs';
    $contents = '';
    foreach (JModuleHelper::getModules($position) as $mod) {
        $contents .= $renderer->render($mod, $params);
    }
    echo $contents;
    ?>

    <div class="banner_page margin_bottom_24">
        <a href="#">
            <img class="img-responsive" alt="In offset" src="<?php echo $image_banner; ?>" title="In offset">
        </a>
    </div>
    <div class="blog_left col-lg-3 col-md-3 col-xs-12">
        <div class="menu_left clearfix">
                <div class="title borderbottom00a651 paddingbottom_12 paddingtop_10">Danh mục <?php echo $category_info->title; ?></div>
                <?php
                $product_items = JKentlib::getArticleFromCategory(23);
                if ($product_items) { ?>
                    <ul class="clearfix">
                        <?php foreach ($product_items as $product_item) {
                            $class = '';
                            if ($article->id == $product_item->id) {
                                $class = 'active';
                            }
                            $product_item_title = $product_item->title;
                            $link = JRoute::_('index.php?option=com_gocsangtao&view=gocsangtao&id=' . $product_item->id);
                            ?>
                            <li><a title="<?php echo $product_item_title;?>" href="<?php echo $link;?>" class="<?php echo $class;?> link" style="border-width: 0px;"><?php echo $product_item_title;?></a></li>
                        <?php }?>
                    </ul>
                <?php } ?>
                <div class="margin_bottom_15"></div>
        </div>
    </div>
    <div class="product_detail col-lg-9 col-md-9 col-xs-12">
        <span id="MainContent_Lb_ProductTitle" class="title col-lg-12 col-md-12 col-xs-12"><?php echo $product_title;?></span>
        <?php if ($product_image) { ?>
        <div class="image col-lg-6 ol-md-6 col-xs-12">
            <img id="MainContent_Img_Image" title="<?php echo $product_title;?>" class="img-responsive"
                 src="<?php echo $product_image;?>" alt="<?php echo $product_title;?>">
        </div>
        <?php } ?>
        <div class="form_info col-lg-6 ol-md-6 col-xs-12">
            <div class="socialbuttonlist clearfix">

            </div>
            <?php if ($product_intro) { ?>
            <span id="MainContent_Lb_Summary" class="summary col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <?php echo $product_intro; ?>
            </span>
            <?php }?>
        </div>
        <div style="clear: both"></div>
        <!--<div class="image_detail_list">
            <ul>


            </ul>
        </div>-->
        <div class="detail_info col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php if ($product_intro) { ?>
            <div class="title">Thông tin chi tiết</div>
            <?php } ?>
            <div class="content">
                <?php echo $product_content; ?>
            </div>
        </div>
        <?php
        $other_article = JKentlib::getArticleFromCategory($article->catid, $article->id);
        ?>
        <?php if ($other_article) { ?>
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div id="carousel-other" class="es-carousel-wrapper">
                <h1 class="title">Nội dung khác</h1>


                <div class="es-carousel">
                    <ul class="items" style="width: 6100px; margin-left: 0px;">
                        <?php
                        foreach ($other_article as $product_item) {
                            $other_product_title = $product_item->title;
                            $other_product_link = JRoute::_('index.php?option=com_sanpham&view=sanphams&id=' . $product_item->id);
                            $other_product_image = json_decode($product_item->images)->image_intro;
                            ?>
                            <li style="margin-right: 16px; width: 194px;">
                                <a href="<?php echo $other_product_link; ?>" class="link" style="border-width: 0px;">
                                    <figure class="p3">
                                    <span class="img-box"
                                          style="background-image: url('<?php echo $other_product_image;?>')"></span>
                                        <h2 class="name"><?php echo $other_product_title; ?></h2>
                                    </figure>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="es-nav">
                    <span class="es-nav-prev" style="display: none;"></span><span class="es-nav-next"></span>
                </div>
                <div class="es-nav"><span class="es-nav-prev" style="display: none;"></span>
                    <span class="es-nav-next" style="display: block;"></span>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>
</div>