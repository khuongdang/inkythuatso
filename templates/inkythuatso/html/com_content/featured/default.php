<?php
defined('_JEXEC') or die;
?>

<div class="container-fluid">
    <div class="mainwidth container">
        <div class="banner col-lg-8 col-md-8 col-xs-12 margin_bottom_8">
            <!-- Caption Style -->
            <!-- use jssor.slider.min.js instead for release -->
            <!-- jssor.slider.min.js = (jssor.js + jssor.slider.js) -->
            <script type="text/javascript" src="./js/jssor.slider.min.js"></script>
            <script type="text/javascript" src="./js/jssor_slider1_starter.js"></script>
            <link href="css/jssor_slider.css" rel="stylesheet" type="text/css">
            <!-- Jssor Slider Begin -->
            <!-- You can move inline styles to css file or css block. -->

            <div id="slider1_container" class="col-lg-12 col-md-12 col-xs-12" style="height: 357px; overflow: hidden; width: 758px;">
                <!-- Loading Screen -->

                <!-- Slides Container -->

                <!-- Bullet Navigator Skin Begin -->
                <!-- jssor slider bullet navigator skin 01 -->
                <!-- bullet navigator container -->

                <!-- Bullet Navigator Skin End -->
                <!-- Arrow Navigator Skin Begin -->
                <!-- Arrow Left -->

                <!-- Arrow Right -->

                <!-- Arrow Navigator Skin End -->
                <!-- Trigger -->
                <div style="position: absolute; top: 0px; left: 0px; width: 758px; height: 357px; transform-origin: 0px 0px 0px; transform: scale(1);">
                    <div class="col-lg-12 col-md-12 col-xs-12" style="height: 357px; overflow: visible; position: relative; top: 0px; left: 0px;">
                        <div u="loading" style="position: absolute; top: 0px; left: 0px; width: 758px; height: 357px; display: none;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                        </div>
                        <div u="slides" class="col-lg-12 col-md-12 col-xs-12" style="cursor: move; position: absolute; left: 0px; top: 0px; height: 357px; overflow: hidden; z-index: 0;">
                            <?php
                            $slide_show_homepage = JKentlib::getImageSliderHomepage(1);
                            foreach ($slide_show_homepage as $item_slide) {
                                $image = 'images/phocagallery/' . $item_slide->filename;
                            ?>
                            <div style="width: 758px; height: 357px; top: 0px; left: 0px; position: absolute; overflow: hidden; display: none;">
                                <a title="in lịch bloc" href="#">
                                    <img alt="in lịch bloc" src="<?php echo $image;?>" title="in lịch bloc">
                                </a>
                                <div u="caption" t="*" class="captionRed" style="position: absolute; left: 20px; bottom: 30px; width: 300px; height: 40px; padding: 15px;">
                                    <span class="name">in lịch bloc</span>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px; width: 110px; height: 20px;">
                            <!-- bullet navigator item prototype -->

                            <div u="prototype" style="position: absolute; width: 20px; height: 20px; left: 0px; top: 0px;" class=""></div>
                            <div u="prototype" style="position: absolute; width: 20px; height: 20px; left: 30px; top: 0px;" class="av"></div>
                            <div u="prototype" style="position: absolute; width: 20px; height: 20px; left: 60px; top: 0px;"></div>
                            <div u="prototype" style="position: absolute; width: 20px; height: 20px; left: 90px; top: 0px;"></div>
                        </div>
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 150px; left: 8px;"></span>
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 150px; right: 16px"></span>
                        <script>
                            jssor_slider1_starter('slider1_container');
                        </script>
                    </div>
                </div>
            </div>
            <!-- Jssor Slider End -->
        </div>

        <div class="service_main col-lg-4 col-md-4 col-xs-12">
            <ul>
                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftuan.tbcprinter&tabs&width=365&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=109996865756563" width="365" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </li>

                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_top__25">
                    <?php
                    $document = JFactory::getDocument();
                    $params = array();
                    $renderer = $document->loadRenderer('module');
                    $position = 'video';
                    $contents = '';
                    foreach (JModuleHelper::getModules($position) as $mod) {
                        $contents .= $renderer->render($mod, $params);
                    }
                    echo $contents;
                    ?>
                </li>

            </ul>
        </div>

    </div>
</div>

<div class="mainwidth container ">
    <?php
    $document = JFactory::getDocument();
    $params = array();
    $renderer = $document->loadRenderer('module');
    $position = 'block_product_1';
    $contents = '';
    foreach (JModuleHelper::getModules($position) as $mod) {
        $contents .= $renderer->render($mod, $params);
    }
    echo $contents;
    ?>
</div>

<div class="margin_bottom_10 clearfix"></div>
<div class="container-fluid  row">
    <div class="blog_bg clearfix">
        <div class="mainwidth container">
            <?php
            $document = JFactory::getDocument();
            $params = array();
            $renderer = $document->loadRenderer('module');
            $position = 'block_product_2';
            $contents = '';
            foreach (JModuleHelper::getModules($position) as $mod) {
                $contents .= $renderer->render($mod, $params);
            }
            echo $contents;
            ?>
        </div>
        <div class="margin_bottom_10 clearfix"></div>
        <div class="mainwidth container">
            <?php
            $document = JFactory::getDocument();
            $params = array();
            $renderer = $document->loadRenderer('module');
            $position = 'block_product_3';
            $contents = '';
            foreach (JModuleHelper::getModules($position) as $mod) {
                $contents .= $renderer->render($mod, $params);
            }
            echo $contents;
            ?>
        </div>
    </div>
</div>
<div class="container-fluid row line_black"></div>