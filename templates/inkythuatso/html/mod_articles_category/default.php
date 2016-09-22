<?php
defined('_JEXEC') or die;
$article = $list[0];
$cat_id = $article->catid;
$category_info = JKentlib::getCategoryInfo($cat_id);
?>
<div id="carousel-<?php echo $cat_id?>" class="es-carousel-wrapper ">
    <h1 class="title "><a href="javascript:void(0);" title="<?php echo $category_info->title ?>"><?php echo $category_info->title ?> / Xem thêm </a>
    </h1>
    <div class="es-carousel col-lg-12">
        <ul class="items" style="width: 4861px; margin-left: 0px;">
            <?php
            foreach ($list as $index=>$obj) {
                $image = json_decode($obj->images)->image_intro;
                $link = JRoute::_('index.php?option=com_sanpham&view=sanphams&id=' . $obj->id);
                ?>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-right: 16px; width: 215px;">
                    <a href="<?php echo $link;?>" class="link" style="border-width: 0px;" title="<?php echo strtoupper($obj->title);?>">
                        <figure class="p3">
                            <span class="img-box" style="background-image: url(<?php echo JUri::base() . $image; ?>)"></span>
                            <div class="title_carousel">
                            <h2 class="name"><?php echo $obj->title;?></h2>
                            </div>
                        </figure>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>
<script>
    var autoplay = false;
    <?php if($index == 0) { ?>
    var autoplay = true;
    <?php } ?>
    $(function () {
        $('#carousel-<?php echo $cat_id?>').elastislide({
            imageW: 215,
            minItems: 1,
            easing: '',
            margin: 16,
            border: 0
        });
    });
</script>
<?php
if (count($list) < 5 ) {
    ?>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#carousel-<?php echo $cat_id?> .es-nav-prev').unbind();
            $('#carousel-<?php echo $cat_id?> .es-nav-next').unbind();
        });
    </script>
    <?php
}
?>
