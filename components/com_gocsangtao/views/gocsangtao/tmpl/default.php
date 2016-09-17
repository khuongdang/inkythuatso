<?php

defined('_JEXEC') or die;
$image_banner = JKentlib::getCategoryImage(23);
$category_info = JKentlib::getCategoryInfo(23);
$menu_product = JKentlib::getCategoryFromParent(8);
$article_id = JRequest::getInt('id');
if ($article_id == 0) {
    $article = JKentlib::getArtileFromFirstCatParent();
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
                <div class="title borderbottom00a651 paddingbottom_12 paddingtop_10"><?php echo $category_info->title; ?></div>
                <?php
                $product_items = JKentlib::getArticleFromCategory(23);
                if ($product_items) { ?>
                    <ul class="clearfix">
                        <?php foreach ($product_items as $product_item) {
                            $product_item_title = $product_item->title;
                            $link = JRoute::_('index.php?option=com_sanpham&view=sanphams&id=' . $product_item->id);
                            ?>
                            <li><a title="<?php echo $product_item_title;?>" href="<?php echo $link;?>" class="link" style="border-width: 0px;"><?php echo $product_item_title;?></a></li>
                        <?php }?>
                    </ul>
                <?php } ?>
                <div class="margin_bottom_15"></div>
        </div>
    </div>
    <div class="product_detail col-lg-9 col-md-9 col-xs-12">
        <span id="MainContent_Lb_ProductTitle" class="title col-lg-12 col-md-12 col-xs-12"><?php echo $product_title;?></span>
        <div class="image col-lg-6 ol-md-6 col-xs-12">
            <img id="MainContent_Img_Image" title="<?php echo $product_title;?>" class="img-responsive"
                 src="<?php echo $product_image;?>" alt="<?php echo $product_title;?>">
        </div>
        <div class="form_info col-lg-6 ol-md-6 col-xs-12">
            <h1 id="DetailName" class="name" title="<?php echo $product_title;?>"><span id="MainContent_Lb_Name"><?php echo $product_title;?></span>
            </h1>
            <div class="socialbuttonlist clearfix">

            </div>
            <span id="MainContent_Lb_Summary" class="summary col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <?php echo $product_intro; ?>
            </span>
        </div>
        <div style="clear: both"></div>
        <div class="image_detail_list">
            <ul>


            </ul>
        </div>
        <div class="detail_info col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="title">Thông tin chi tiết</div>
            <div class="content">
                <?php echo $product_content; ?>
            </div>
        </div>
        <div class="creation_area_list col-lg-12 col-md-12 col-xs-12">
            <div class="title">GÓC SÁNG TẠO</div>
            <ul>

                <li class="col-lg-12">
                    <a href="/chi-tiet-sang-tao/ep-kim/5/">
									<span class="image col-lg-2">
										<img class="img-responsive"
                                             alt="ÉP KIM                                                                                                                                                                                                                                                         "
                                             title="Tạo bề mặt ánh kim đủ màu, nổi bật cho logo, chữ...trên Namecard.
Thời gian: 2-3 ngày.
 " src="/ImgPro/ep-kim.jpg">
									</span>
                        <span
                            class="name">ÉP KIM                                                                                                                                                                                                                                                         </span>
                        <span class="summary">Tạo bề mặt ánh kim đủ màu, nổi bật cho logo, chữ...trên Namecard.
Thời gian: 2-3 ngày.
 </span>
                    </a>
                </li>

                <li class="col-lg-12">
                    <a href="/chi-tiet-sang-tao/can-mang-mo-bong/10/">
									<span class="image col-lg-2">
										<img class="img-responsive"
                                             alt="CÁN MÀNG MỜ - BÓNG                                                                                                                                                                                                                                             "
                                             title="Phủ một lớp polyme mờ/ bóng lên bề mặt Poster, Folder...
Thời gian: 2-3 ngày" src="/ImgPro/can-mang-mo-hoac-bong.jpg">
									</span>
                        <span
                            class="name">CÁN MÀNG MỜ - BÓNG                                                                                                                                                                                                                                             </span>
                        <span class="summary">Phủ một lớp polyme mờ/ bóng lên bề mặt Poster, Folder...
Thời gian: 2-3 ngày</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div id="carousel-other" class="es-carousel-wrapper">
                <h1 class="title">Sản phẩm khác</h1>
                <?php
                $other_article = JKentlib::getArticleFromCategory($article->catid, $product_cat_id)
                ?>
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
    </div>

</div>